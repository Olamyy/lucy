<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 2/4/17
 * Time: 11:53 PM
 */

class Category extends CI_Controller
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
        $cat_id = $this->input->get("cat_id");
        $category_details = $this->user_model->get("lucy_category_description", 0, 0);
        $pre_cart = array();
        foreach($category_details as $data){
            $loop_cat = array("pre_cat" => explode(",", $data["sub_categories"]), 'has_sub'=>false);
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }
        $this->data["category_products"] = $this->user_model->custom_get("lucy_product", array("product_categories"=>$cat_id), 0, 0);
        $this->data["category_list"] = $this->user_model->get("lucy_category_description", 0, 0);
        $this->data["pre_cart"] = $pre_cart;
        $this->data["is_sub"] = false;
        $this->data["category_details"] = $this->user_model->custom_get("lucy_category_description", array("category_id"=>$cat_id), 0, 0);
        $this->smarty->view("front/categories.tpl", $this->data);

    }

}

