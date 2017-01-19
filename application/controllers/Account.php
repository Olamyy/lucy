<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $promo_percent = 5;
        $this->data['promo'] = "Save up to {$promo_percent}% everyday on all products";

        $this->smarty->view('front-theme/user/profile.tpl', $this->data);
    }

}

