<?php
/**
 * Created by PhpStorm.
 * User: oluwasegunmatthew
 * Date: 6/11/15
 * Time: 9:35 PM
 */

class SMSAgent {
    private $client;
    private static $instance;
    private $config;
    private $curl;

    private $base_url = 'http://smsc.xwireless.net/API/WebSMS/Http/v3.1/index.php?';

    public function __construct(){
        $_ci =& get_instance();
        $this->curl = new \Curl\Curl();
        $this->config = $_ci->config->item('sms_credentials');
    }

    public function send_sms($object){
        $response = array();
        $url = $this->base_url.'username='.urlencode($this->config['username']).'&password='.urlencode($this->config['password']).'&sender='.urlencode($this->config['sender_name']).'&to='.urlencode($object->address).'&message='.urlencode($object->message).'&reqid=1&format=json&route_id=2&callback=#&unique=0&sendondate='.date('Y-m-d H:i:s');
        $this->curl->get($url);
        if ($this->curl->error) {
            //echo 'Error: ' . $this->curl->error_code . ': ' . $this->curl->error_message;
        }else
            $response = json_decode($this->curl->response);
        return $response;
    }


    public function check_credit(){

    }
}