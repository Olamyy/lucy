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

        $this->data['pre_cart'] = $this->user_model->get_cat_details();

        ///get user data from session
        $user_session = $this->session->userdata('user_session');
        if ($user_session){
                $this->data['user_session'] = $user_session;
        }

    }

    public function index()
    {
        if (!empty($_POST)) {
            $registry_search_query = $this->input->post('registry_search_query');

            if (empty($registry_search_query)) $error[] = 'Enter a registry to begin search';

            if (empty($error)){
                $search_query = $this->user_model->get_registry_with_email_or_name($registry_search_query);
                if($search_query){
                    $this->data['registry_search_details'] = $search_query;
                }
                else
                    print_r($registry_search_query);
            }
            else
                $this->data['error'] = $error;

        }

        $this->smarty->view('front/registry/find.tpl', $this->data);
    }

}


