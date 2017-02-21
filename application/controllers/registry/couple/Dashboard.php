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
        $this->load->model('category_model');

        $user_session = $this->session->has_userdata('user_session');
        if (!$user_session){
            redirect('index.php/registry/auth/login');
        }
        $this->data['user_details'] = $this->session->userdata()['user_session'];

    }

    public function index()
    {
        $cat_from_db = $this->category_model->get('lucy_category_description', 0 , 0);
        $this->data['user_session'] = $this->session->userdata('user_session');
        $pre_cart = array();
        foreach($cat_from_db as $data){
            $loop_cat = array('pre_cat'=>explode(",", $data['sub_categories']));
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }
        $this->data['pre_cart'] = $pre_cart;

        $this->data['ip'] = $this->input->ip_address();
        $this->data['new_products'] = $this->user_model->custom_get('lucy_product', array('position'=>"New Products"), 0, 0);

        $this->smarty->view('front/registry/couple/dashboard/dashboard.tpl', $this->data);
    }


}
