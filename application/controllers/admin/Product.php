<?php
/**
 * Created by PhpStorm.
 * Date: 7/6/16
 * Time: 5:11 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Product extends CI_Controller
{

    private $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index(){

        $this->add();
    }

    public function add(){
        $this->smarty->view('admin/product/add.tpl', $this->data);
    }
}