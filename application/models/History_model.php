<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History_model extends Auth_Model{

    function __construct(){
        parent::__construct(array('model'=>$this->config->item('mongo_models')['history']));
    }
}