<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function add($table, $data)
    {
        $query = $this->db->insert($data, $table);
        if ($query) {
            return true;
        } else
            return false;
    }


    public function update($data, $table)
    {
        $state = $this->db->replace($data, $table);
        if ($state) {
            return true;
        } else
            return false;

    }


    public function custom_query($query)
    {
        $state = $this->db->query($query);
        if ($state){
            return $state->result_array();
        }
        else
            return false;
    }


    public function get_transaction_code()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $random_string_length = 20;
        $string = '';
        $max = strlen($characters) - 1;
        for ($i = 0; $i < $random_string_length; $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }

        return $string;

    }


    public function getCode()
    {
        return mt_rand(1000, 9000);
    }

    public static function msisdn_sanitizer($msisdn,$plus = false){
        $msisdn = trim($msisdn);
        $msisdn = str_replace('+','',$msisdn);

        if(preg_match('/^234/i',$msisdn) == true){
            $msisdn = '0'.substr($msisdn,3);
        }

        if(strlen($msisdn) == 11){
            $msisdn = '+234'.substr($msisdn,1);
        }else{
            if(strpos($msisdn,'+') == false)
                $msisdn = '+'.$msisdn;
        }

        if($plus == false) $msisdn = str_replace('+','',$msisdn);

        return $msisdn;
    }



























    /*


    public function check($msisdn){
        return $this->predis->get_set(array("user-profile"=>$msisdn));
    }

    public function add($data){
        $state = $this->mongoci->_save($data);
        if(empty($state) || isset($state->error)){
            return false;
        }else{
            //add to redis okay...
            if(isset($state['answered_questions'])) $state['answered_questions'] = json_encode($state['answered_questions']);
            $this->predis->add_set(array("key"=>array("user-profile"=>$state["msisdn"]),"data"=>$state));
            return $state;

        }
    }

    public function update($data,$condition)
    {
        $state = $this->mongoci->_update($data, $condition);
        if (empty($state) || isset($state->error)) {
            return false;
        } else {
            if(isset($state['answered_questions'])) $state['answered_questions'] = json_encode($state['answered_questions']);
            $this->predis->add_set(array("key" => array("user-profile" => $state["msisdn"]), "data" => $state));
            return $state["_id"];
        }
    }

    public function get($condition,$fields=array()){
        $data = $this->mongoci->_get($condition,$fields);

    //        print_r($data);

        if (empty($data) || isset($data->error)){
            return false;
        }
        else{
            return $this->predis->get_set(array("user_profile"=>$data["user"]));
        }
    }

    public function get_all($condition=array(),$option=array()){
        $data = $this->mongoci->_get_bulk($condition,$option);
    //        $data->sort(array('points' => -1));
        if(empty($data) || isset($data->error)){
            return false;
        }else{
            return $data;
        }
    }




    function getByID($id='') {
        $user = $this->posts->findOne(array('_id' => new MongoId($id)));
        if ($user) {
            return $user;
        }
        return false;
    }


    //
    //    public function next(){
    //        if ($this->mongoci->)
    //    }

        */
    }


