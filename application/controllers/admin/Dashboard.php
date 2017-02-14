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

        if($this->user_model->auto_logout("admin-user"))
        {
            $this->session->sess_destroy();
            redirect('index.php/admin/login/');
        }
    }

    public function index(){
        $this->smarty->view('admin/dashboard.tpl', $this->data);
    }
}