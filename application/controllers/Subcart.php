<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 6/1/17
 * Time: 4:02 PM
 */

class Subcart extends CI_Controller
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
        $p_id = $this->input->get("p_id");
        $c_id = $this->input->get("c_id");

        $category_details = $this->user_model->get("lucy_category_description", 0, 0);
        $sub_category_details = $this->user_model->custom_get("lucy_sub_category_description", array("title" => preg_replace('/\s+/', '', $p_id)),  0, 0);
//        print_r($sub_category_details);
        $pre_cart = array();
        foreach($category_details as $data){
            $loop_cat = array("pre_cat" => explode(",", $data["sub_categories"]), 'has_sub'=>false);
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }
        $sub_cart = array();
        foreach($sub_category_details as $data){
            $loop_cat = array("sub_cat" => explode(",", $data["sub_categories"]), 'has_sub'=>false);
            $loop_cat = array_replace($data, $loop_cat);
            $sub_cart[] = $loop_cat;
        }

        $this->data["category_products"] = $this->user_model->get_sub_products($p_id, $c_id);
        $this->data["pre_cart"] = $pre_cart;
        $this->data["sub_cart"] = $sub_cart;
        $this->data["is_sub"] = true;
        $this->data["category_details"] = $this->user_model->custom_get("lucy_category_description", array("category_id"=>$c_id), 0, 0);
        $this->smarty->view("front/categories.tpl", $this->data);

    }

}

