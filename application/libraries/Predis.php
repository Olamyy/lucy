<?php

defined( 'BASEPATH' ) or die( 'Restricted access');

class Predis {
	public $client;
	public $key = false;

	function __construct(){
		$this->client = Connector::Redis();
	}

	//PERFORMING MAJOR CRUD FUNCTION

	private function setkey($key){
		$this->key = $key;
	}

	public function getkey(){
		return $this->key;
	}

	public function get_fields(){
		return $this->fields;
	}


	private function key_generator($array){
		$keys = array_keys($array);
		return $keys[0].':'.$array[$keys[0]];
	}

	public function check_set($key){
		return $this->client->exists($this->key_generator($key));
	}

	public function check_set_field($key,$field){
		return $this->client->hexists($this->key_generator($key),$field);
	}

	public function add_set($set){ //use to add and update hmset
		/*
		 * array("key"=>array(),"data"=>array());
		 */
		$key = $this->key_generator($set['key']);
		$status = $this->client->hmset($key,$set['data']);

		if(isset($set['expire']) && is_numeric($set['expire'])){
			$this->client->expire($key,$set['expire']);
		}
		return $status;
	}


	public function get_set($key,$field=''){
		$data = array();
		$key = $this->key_generator($key);

		if(!empty($field)) {
			$data = $this->client->hmget($key, $field);
			$data = $data[0];
		}
		else
			$data = $this->client->hgetall($key);

			$data;

			return $data;
	}

	public function rename_set($old,$new){
		$this->client->rename($this->key_generator($old),$this->key_generator($new));
	}

	public function delete_set($key){
		$this->client->del($this->key_generator($key));
	}

}


