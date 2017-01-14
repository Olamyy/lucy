<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Model extends CI_Model {

    protected $mongoOption;

    function __construct($option){
        parent::__construct();
        $this->mongoOption = $option;
    }


    public function add($data){
        $state = $this->mongoci->_save($data,$this->mongoOption);
        if(empty($state) || isset($state->error)){
            return false;
        }else{
            return $state;
        }
    }

    public function update($data,$condition){
        $state = $this->mongoci->_update($data,$condition,$this->mongoOption);
        if(empty($state) || isset($state->error)){
            return false;
        }else{
            return $state;
        }
    }


    public function get($condition,$field=array()){
        $data = $this->mongoci->_get($condition,$field,$this->mongoOption);
        if(empty($data) || isset($data->error)){
            return false;
        }else{
            return $data;
        }
    }


    public function get_all($condition=array(),$option=array()){
        $data = $this->mongoci->_get_bulk($condition,$option,$this->mongoOption);
        if(empty($data) || isset($data->error)){
            return false;
        }else{
            return $data;
        }
    }

    public function count_all($condition=array(),$option=array()){
        $count = $this->mongoci->_get_bulk_count($condition,$option,$this->mongoOption);
        if(empty($count) || isset($count->error)){
            return false;
        }else{
            return $count;
        }
    }
}



