<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('admin_model');

        $this->data['pre_cart'] = $this->admin_model->get_cat_details();

        ///get user data from session
        $user_session = $this->session->userdata('user_session');
        if ($user_session){
                $this->data['user_session'] = $user_session;
        }

    }

    public function index()
    {
        $this->smarty->view('front/registry/find.tpl', $this->data);
    }

}


