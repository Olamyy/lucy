<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
//author: Oluwasegun Matthew
//email: oluwasegunmatthew@gmail.com
*/

class Miscellaneous_model extends CI_Model {

	private $config = false;
	
	function __construct(){
		parent::__construct();
		$this->config = Options::$_settings;
	}

	public function load_config($condition=array()){
		$query = $this->db->order_by("item_order asc");
		if(!empty($condition))
			$query = $query->get_where($this->config,$condition);
		else
			$query = $query->get($this->config);
		
		$data = $query->result_array();
		return $data;
	}

	 private function check_config_field($field_name){
	 	if ($this->db->field_exists($field_name, $this->config)){
		   return true;
		}else
			return false;
	 }

	 public function update_config($data,$condition){
	 	$this->db->update($this->config, $data, $condition);
		return $this->db->affected_rows();
	 }
}