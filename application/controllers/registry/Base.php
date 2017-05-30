<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 2/5/17
 * Time: 12:08 AM
 */

class Base extends CI_Controller
{

    private $data = array();
    private $check;

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->model("user_model");

    }

    public function index()
    {
        $cat_from_db = $this->user_model->get("lucy_category_description", 0 , 0);
        $this->data["user_session"] = $this->session->userdata("user_session");

        $pre_cart = array();
        foreach($cat_from_db as $data){
            $loop_cat = array("pre_cat"=>explode(",", $data["sub_categories"]));
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }
        $this->data["pre_cart"] = $pre_cart;

        $this->smarty->view("front/registry/base.tpl", $this->data);
    }

}
