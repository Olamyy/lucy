<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('admin_model');

    }

    public function index()
    {

    }


    public function manage(){
        $this->data['user_session'] = $this->session->userdata();
        $this->smarty->view('front/registry/couple/dashboard/manage.tpl', $this->data);
    }

    public function logout(){
        $this->session->sess_destroy();

        redirect('index.php/');
    }
}


