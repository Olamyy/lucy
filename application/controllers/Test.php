<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 1/17/17
 * Time: 11:36 AM
 */

class Test extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }

    public function index(){
        $this->load->library('email');

        $this->email->from('instadriverng@gmail.com');
        $this->email->to(array('lutherlawoyin@gmail.com', 'olamyy53@gmail.com'));
        $this->email->subject('Insta Driver User Request');
        $context = array('name'=>['name'], 'email'=>['email'],'phone'=>['number']);
        $message = "hbjhbjbjb";
        $this->email->initialize();
        print_r($this->email->message($message));
    }
}