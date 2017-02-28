<?php
//Learn more about usage here...http://mongodb.github.io/mongo-php-library/

defined( 'BASEPATH' ) or die( 'Restricted access');

class MongoCI {
    public $db;
    private $model;
    private $collection;

    function __construct(){
        $this->db = Connector::Mongo();
    }

    protected function init($option){
        $this->collection = $option['model'];
        $this->model = $this->db->selectCollection($option['model']);
            //check if schema and index parameter is set okay....
        if(!empty($option['indexes'])){
            $this->_create_indexes($option['indexes']);
        }
    }


    private function _create_validation($validator=array()){ //not in use...
        $this->db->createCollection($this->collection,$validator);
    }

    private function _create_index($key,$index){ //not in use...
        try{
            return $this->model->createIndex($key,$index);
        }catch (Exception $ex){
            return $this->handleError($ex);
        }
    }






    private function _create_indexes($indices){
        try {
            return $this->model->createIndexes($indices);

        }catch (Exception $ex){
            return $this->handleError($ex);
        }
    }

    private function _strigify_id($data){
        return (string) $data['_id'];
    }

    public function _get($conditions,$fields=array(),$option){
        $this->init($option);
        try {
            $data = $this->model->findOne($conditions, $fields);
            if (!empty($data)) $data['_id'] = $this->_strigify_id($data);
            return $data;
        }catch (Exception $ex){
            return $this->handleError($ex);
       }
    }


    public function _get_bulk($condition=array(),$options=array(),$option){
        $this->init($option);
        $documents = array();

        if (!empty($options['fields'])){
            $projections = array();
            foreach($options['fields'] as $key=>$value){
                $projections[$value] = true;
            }
            unset($options['fields']);
            $options['projection'] = $projections; //array('field'=>1)
        }

        try{
            $cursor  = $this->model->find($condition,$options);
            foreach($cursor as $doc){
                $doc['_id'] =  $this->_strigify_id($doc);
                $documents[] = $doc;
            }
            return $documents;
        }catch (Exception $ex){
            return $this->handleError($ex);
        }
    }

    public function _get_bulk_count($condition=array(),$options=array(),$option){
        $this->init($option);
        $count = 0;

        if (!empty($options['fields'])){
            $projections = array();
            foreach($options['fields'] as $key=>$value){
                $projections[$value] = true;
            }
            unset($options['fields']);
            $options['projection'] = $projections; //array('field'=>1)
        }

        try{
            $count  = $this->model->count($condition,$options);
            return $count;
        }catch (Exception $ex){
            return $this->handleError($ex);
        }
    }


    public function _aggregate(){
        ///still trying to figure it out...
    }


    public function _save($document,$option){
        $this->init($option);
        try{
            $id = $this->model->insertOne($document)->getInsertedId();
            $document["_id"] = (string) $id;
            return $document;
        }catch (Exception $ex){
           return $this->handleError($ex);
        }
    }


    public function _update($document,$condition,$option){
        $this->init($option);
        try{
            $document = (array) $this->model->findOneAndUpdate($condition,array('$set'=>$document),array("returnDocument"=>MongoDB\Operation\FindOneAndReplace::RETURN_DOCUMENT_AFTER));
            if(!empty($document))
                $document["_id"] = (string) $document["_id"];
            return $document;
        }catch (Exception $ex){
            return $this->handleError($ex);
        }
    }


    public function _update_bulk($document,$condition,$option){
        $this->init($option);
        try{
            return $this->model->updateMany($condition,array('$set'=>$document));
        }catch (Exception $ex){
            return $this->handleError($ex);
        }
    }


    public function close(){

    }


    public function drop_collection(){
        try{
            $this->db->dropCollection($this->collection);
        }catch (Exception $ex){
            return $this->handleError($ex);
        }
    }

    private function handleError($report){
        return (object) array("error"=>true,"message"=>$report->getMessage());
    }

}