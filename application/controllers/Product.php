<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 2/4/17
 * Time: 11:53 PM
 */

class Product extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->model("user_model");

        $cat_from_db = $this->user_model->get("lucy_category_description", 0 , 0);
        $this->data["user_session"] = $this->session->userdata("user_session");
        $this->data["ip"] = $this->input->ip_address();

        $pre_cart = array();
        foreach($cat_from_db as $data){
            $loop_cat = array("pre_cat"=>explode(",", $data["sub_categories"]));
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }
        $this->data["pre_cart"] = $pre_cart;

    }

    public function index()
    {
        $product_id = $this->input->get("product_id");
        $data = array("product_id"=>$product_id);
        $this->data["on_home_page"] = $this->user_model->get_random("lucy_product", 10);
        $this->data["product_details"] = $this->user_model->custom_get("lucy_product",$data, 0, 0);
        $this->data["review_details"] = $this->user_model->custom_get("lucy_product_review", array("product_id"=>$product_id), 5, 0);
        $this->smarty->view("front/product/product_details.tpl", $this->data);
    }

}

