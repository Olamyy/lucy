<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('category_model');

    }

    public function index()
    {
        $cat_from_db = $this->category_model->get('lucy_category_description', 0 , 0);


        $pre_cart = array();
        foreach($cat_from_db as $data){
            $loop_cat = array('pre_cat'=>explode(",", $data['sub_categories']));
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }

        $this->data['pre_cart'] = $pre_cart;

        $this->smarty->view('front/store.tpl', $this->data);
    }






}

