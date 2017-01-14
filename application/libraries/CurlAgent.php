<?php
/**
 * Created by PhpStorm.
 * User: oluwasegunmatthew
 * Date: 6/30/15
 * Time: 6:48 AM
 */

class CurlAgent {

    private static $instance;
    private $agent;
    private $api_url;

    private function __construct(){
        $this->agent = new \Curl\Curl();
        $this->agent->setHeader('X-API-KEY',Config::read('x_api_key'));
        $this->api_url = Config::read('api_url');
    }

    public  static function getInstance(){
        if(!isset(self::$instance)){
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }


    public function get($url){
        $data = array();
        $this->agent->get($this->api_url.$url);
        if ($this->agent->error) {
            //echo 'Error: ' . $this->agent->error_code . ': ' . $this->agent->error_message;
        }else
            $data = $this->agent->response;

        return $data;
    }

    public function post($url,$param){
        $data = array();
        $this->agent->post($this->api_url.$url,$param);
        if($this->agent->error){
            //echo 'Error: ' . $this->agent->error_code . ': ' . $this->agent->error_message;
        }else
            $data = $this->agent->response;
        return $data;
    }
}