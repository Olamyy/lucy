<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Club_model extends Auth_Model {
    
    private $redis_key = "club-info";

    function __construct(){
        parent::__construct(array('model'=>$this->config->item('mongo_models')['clubs'],
                                    'indexes'=>$this->config->item('mongo_indexes')['clubs']));
        $this->load->library("predis");
    }

    public function add($data){
        $state = parent::add($data);
        if($state){
            $this->predis->add_set(array("key"=>array($this->redis_key=>$state["_id"]),"data"=>$state));
            return $state;
        }else
            return false;
        
    }

    public function check($_id){
        return $this->predis->get_set(array($this->redis_key=>$_id));
    }


    public function update($data,$condition){
        $state = parent::update($data,$condition);
        if($state){
            $this->predis->add_set(array("key" => array($this->redis_key => $state["_id"]), "data" => $state));
            return $state["_id"];
        }else
            return false;

    }
}
