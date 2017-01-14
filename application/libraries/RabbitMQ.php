<?php
//Learn more about usage here...http://mongodb.github.io/mongo-php-library/

defined( 'BASEPATH' ) or die( 'Restricted access');


class RabbitMQ {

    private $channel;

    function __construct(){
        $this->channel = Connector::RabbitMQ();
    }

    public function push_to_queue($queue,$info){
        $resp = array('status' => false, 'data' => 'Something went wrong.');
        $queue_name = $queue;
        try {
            $this->channel->queue_declare($queue_name, false, true, false, false);
            $processed_data = json_encode($info);
            $sender_message = new \PhpAmqpLib\Message\AMQPMessage($processed_data, array('delivery_mode' => 2));
            $this->channel->basic_publish($sender_message, '', $queue_name);
            $resp = array('status' => true, 'data' => 'Data Sent');
        } catch (Exception $ex) {
            $resp = array('status' => false, 'data' => 'Something went wrong.');
        }

        return $resp;
    }


    public function consume_from_queue($queue,$callback){
        // Read from Queue
        list(, , $consumerCount) = $this->channel->queue_declare($queue, false, true, false, false);
        $rm_execution_limit = 5;

        if ($consumerCount > $rm_execution_limit) exit;
        $this->channel->basic_qos(null, 1, null);
        $this->channel->basic_consume($queue, '', false, false, false, false, $callback);

        while(count($this->channel->callbacks)){
            $this->channel->wait();
        }
    }
}