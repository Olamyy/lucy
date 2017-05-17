<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Dashboard extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->model("user_model");

        $user_session = $this->session->has_userdata("user_session");
        if (!$user_session){
            redirect("index.php/registry/auth/login");
        }
        $this->data["user_details"] = $this->session->userdata()["user_session"];


    }

    public function index()
    {
        $cat_from_db = $this->user_model->get("lucy_category_description", 0 , 0);
        $pre_cart = array();
        foreach($cat_from_db as $data){
            $loop_cat = array("pre_cat"=>explode(",", $data["sub_categories"]));
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }
        $this->data["pre_cart"] = $pre_cart;

        $this->data["ip"] = $this->input->ip_address();
        $this->data["new_products"] = $this->user_model->get("lucy_product");
        $table_name = str_replace("<REG_TYPE>", $this->data["user_details"][0]["regType"], "lucy_<REG_TYPE>_user");
        $this->data["complete_details"] = $this->user_model->custom_get($table_name, array("user_id" => $this->data["user_details"][0]["user_id"]), 0, 0);
        $this->smarty->view("front/registry/couple/dashboard/dashboard.tpl", $this->data);
    }


}
