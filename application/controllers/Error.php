<?php

/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 6/8/17
 * Time: 3:22 AM
 */

class Error extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->model("user_model");

        $this->data["current_user"] = $this->session->userdata("current_user");

    }

    public function index()
    {
        $this->smarty->view("front/error.tpl", $this->data);
    }

}
