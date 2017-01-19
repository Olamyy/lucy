<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {

        $this->smarty->view('front-theme/weddingservices.tpl', $this->data);
    }


}

