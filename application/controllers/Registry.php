<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry extends CI_Controller
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

        $this->smarty->view('front-theme/registry.tpl', $this->data);
    }


    public function find(){

        $this->smarty->view('front-theme/registry/search.tpl', $this->data);

    }

    public function create(){
        $this->smarty->view('front-theme/registry/create.tpl', $this->data);
    }

    public function manage(){
        $this->smarty->view('front-theme/registry/manage.tpl', $this->data);

    }

    public function help(){
        $this->smarty->view('front-theme/registry/help.tpl', $this->data);
    }

    public function whyus(){
        $this->smarty->view('front-theme/registry/whyus.tpl', $this->data);

    }
}

