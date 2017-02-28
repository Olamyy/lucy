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
        $this->load->model('user_model');

    }

    public function index(){
        $couple_details = $this->user_model->custom_get('lucy_couple', array('couple_id'=>'78b06zjf55mvprb'), 0, 0);

        $test = $this->user_model->update(array('code'=>'12345'),
            'lucy_couple',
            array('code'=>$couple_details[0]['code']));
        echo "<pre>";
        print_r($test);
        echo "<pre>";
    }
}