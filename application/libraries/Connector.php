<?php 
defined( 'BASEPATH' ) or die( 'Restricted access');

//use Predis\Client;

class Connector
{
    public $Redis;
    public $MongoDB;

    private $_ci;
    public $_redis_config;
    public $_mongo_config;


    public static function Redis()
    {
        static $instances;
        if (!isset ($instances)) $instances = array();
        if (empty($instances['redis'])) {
            $_ci =& get_instance();
            $_redis_config = $_ci->config->item('redis');
            $redis = null;

            try {
                $redis = new \Predis\Client(array(
                    "scheme" =>$_redis_config['scheme'],
                    "host" =>$_redis_config['host'],
                    "port" => $_redis_config['port'],
                    "database" => $_redis_config['database'],
                    //"password" => $_redis_config['password']
                ));
            } catch (Exception $e) {
                show_error("Unable to connect to Redis: {$e->getMessage()}", 500);
            }
            $instances['redis'] = $redis;
        }
        return $instances['redis'];
//    }

    }




    public static function Mongo()
    {
        static $instances;
        if (!isset($instances))
            $instances = array();
        if (empty($instances['mongo'])) {
            $mongo = null;
            $_ci =& get_instance();
            $_mongo_config = $_ci->config->item('mongo');

            try {
                $mongo_client = new MongoDB\Client("mongodb://".$_mongo_config['host'].":".$_mongo_config['port'],[],['typeMap' => ['root' => 'array', 'document' => 'array', 'array' => 'array']]);
                $mongo = $mongo_client->selectDatabase($_mongo_config['database']);
            } catch (\Exception $e) {
                show_error("Unable to connect to MongoDB: {$e->getMessage()}", 500);
            }
            $instances['mongo'] = $mongo;
        }
        return $instances['mongo'];
    }


    public static function RabbitMQ()
    {
        static $instances;

        if (!isset ($instances))    $instances = array ();
        if (empty($instances['rabbitMQ'])) {
            $rabbitMQ = null;
            $_ci =& get_instance();
            $_rabbit_config = $_ci->config->item('rmq');
            try {
                $rabbitMQ = new \PhpAmqpLib\Connection\AMQPConnection(
                    $_rabbit_config['host'],
                    $_rabbit_config['port'],
                    $_rabbit_config['username'],
                    $_rabbit_config['password']);

                $rabbitMQ = $rabbitMQ->channel();
            }
            catch (Exception $e) {
                show_error("Unable to connect to RabbitMQ: {$e->getMessage()}", 500);
            }
            $instances['rabbitMQ'] = $rabbitMQ;
        }
        return $instances['rabbitMQ'];

    }


}


