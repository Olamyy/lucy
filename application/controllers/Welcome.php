<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
//        $this->load->model('user_model');

    }

    public function index()
    {
        $promo_percent = 5;
        $this->data['promo_message_1'] = "Save up to {$promo_percent}% everyday on all products";

        $this->smarty->view('front/store.tpl', $this->data);
    }






}

