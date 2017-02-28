<?php 

defined( 'BASEPATH' ) or die( 'Restricted access');

class Elastic {
	public $client;

	public $key = false;
	private $index = false;
	private $type = false;
	
	function __construct(){
		$this->client = Connector::Elastic();
	}

	public function init_config($config,$properties=null){
		$this->index = $config['index'];
		$this->type = $config['type'];

		if($properties != null){
			$this->create_map($properties);
		}
	}

	public function create_map($properties){
		$params['index'] = $this->index;
		$params['type'] = $this->type;
		//$params['ignore_conflicts'] = true;
		$map = array(
			'_source' => array('enabled' => true),
			'properties' => $properties);
		$params['body'][$this->type] = $map;
		//$info = $this->client->indices()->get(array('index'=>$this->index));
		$this->client->indices()->create(array('index'=>$this->index,'ignore'=>array('404','400')));
		return $this->client->indices()->putMapping($params);
	}

	/*
	private function create_index($properties=null){
		$params['index'] = $this->index;
		if($properties != null) {
			$params['body']['mappings'][$this->type] = array('properties'=>$properties);
		}
		return $this->client->indices()->create($params);
	}
	*/

	public function index_doc($params){
		$params['index'] = $this->index;
		$params['type'] = $this->type;
		return $this->client->index($params);
	}

	public function get_doc($params){
		$status = false;
		//$params['_source'] = false;
		$params['index'] = $this->index;
		$params['type'] = $this->type;
		try{
			$data = $this->client->get($params);
			$status = $data['_source'];
		}catch (\Exception $ex) {
			//print($ex);
		}
		return $status;
	}

	public function search_doc($params){
		$params['index'] = $this->index;
		$params['type'] = $this->type;
		return  $this->client->search($params);
	}

	public function update_doc($params){
		$status = false;
		$params['index'] = $this->index;
		$params['type'] = $this->type;		
		try {
			$status = $this->client->update($params);
		}catch (\Exception $ex) {
			//print($ex);
		}
		return $status;
	}

	public function delete_doc($params){
		$params['index'] = $this->index;
		$params['type'] = $this->type;
		return $this->client->delete($params);
	}

	public function delete_index(){
		$params['index'] = $this->index;
		return $this->client->indices()->delete($params);
	}

	public function get_mapping(){
		return $this->client->indices()->getMapping(array('index'=>$this->index));
	}

}

