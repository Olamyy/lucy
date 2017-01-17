<?php
/**
 * Created by PhpStorm.
 * Date: 7/6/16
 * Time: 5:11 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    private $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index(){
        $this->smarty->view('admin/dashboard.tpl', $this->data);
    }
}