<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('admin_model');
        $user_session = $this->session->has_userdata('user_session');
        if (!$user_session){
            redirect('index.php/registry/auth/login');
        }
        $this->data['user_session'] = $this->session->userdata()['user_session'];

    }

    public function index()
    {
        $this->smarty->view('front/registry/couple/dashboard/dashboard.tpl', $this->data);
    }


}
