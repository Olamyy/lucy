<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Action extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->model("user_model");

        $user_session = $this->session->has_userdata("user_session");
        if (!$user_session){
            redirect("/auth/login");
        }

    }

    public function index()
    {
//        $this->manage();
//        $this->session->sess_destroy();
    }


    public function manage(){
        $this->data["current_user"] = $this->session->userdata("user_session");
        if ($this->data["current_user"][0]["regType"] == "wedding"){
            $table_name = "lucy_couple";
        }
        else{
            $table_name = str_replace("<REG_TYPE>", $this->data["current_user"][0]["regType"], "lucy_<REG_TYPE>_user");
        }
        $this->data["complete_details"] = $this->user_model->custom_get($table_name, array("user_id" => $this->data["current_user"][0]["user_id"]), 0, 0);
        $user_id = $this->data["current_user"][0]["user_id"];
        $dir = FCPATH."/public/_template/uploads/files";
        $this->data["bg_images"] = array_diff(scandir($dir), array('.', '..'));
        $this->data["registry_details"] = $this->user_model->custom_get("lucy_registry_items", array("user_id"=>$user_id), 0, 0);
        $this->data["ip"] = $this->input->ip_address();
        $pre_cart = array();
        $product_details = array();
        foreach($this->data["registry_details"] as $data){
            $pre_cart[] = $data["product_id"];
        }
        foreach($pre_cart as $product_id){
            $product_details[] = $this->user_model->custom_get("lucy_product", array("product_id"=>$product_id), 0, 0);
        }
        $this->data["user_products"] = $product_details;
        $this->smarty->view("front/registry/couple/dashboard/manage.tpl", $this->data);
    }

    public function preview()
    {
        $preview_id = $this->input->get("preview_id");
        ///Check if user_id is valid
         $this->data["current_user"] = $this->session->userdata("user_session");
        if ($this->data["current_user"][0]["regType"] == "wedding"){
            $table_name = "lucy_couple";
        }
        else{
            $table_name = str_replace("<REG_TYPE>", $this->data["current_user"][0]["regType"], "lucy_<REG_TYPE>_user");
        }
            $this->data["complete_details"] = $this->user_model->custom_get($table_name, array("user_id" => $this->data["user_session"][0]["user_id"]), 0, 0);
            $user_id = $this->data["user_session"][0]["user_id"];
            $this->data["couple_details"] = $this->user_model->custom_get("lucy_couple", array("user_id"=>$user_id), 0, 0);
            $this->data["registry_details"] = $this->user_model->custom_get("lucy_registry_items", array("user_id"=>$user_id), 0, 0);
            $this->data["ip"] = $this->input->ip_address();
            $pre_cart = array();
            $product_details = array();
            foreach($this->data["registry_details"] as $data){
                $pre_cart[] = $data["product_id"];
            }
            foreach($pre_cart as $product_id){
                $product_details[] = $this->user_model->custom_get("lucy_product", array("product_id"=>$product_id), 0, 0);
            }
            $temp_user_cart = $this->user_model->custom_get("lucy_temp_user",array("ip"=>$this->data["user_session"][0]["ip"]), 0, 0);
            $this->data["user_cart_items"] = $this->user_model->custom_get("lucy_user_cart_items", array("cart_id"=>$temp_user_cart[0]["cart_id"]), 0, 0);
            if ($this->data["user_cart_items"]){
                $this->data["product_details"] = $this->user_model->custom_get("lucy_product", array("product_id"=>$this->data["user_cart_items"][0]["product_id"]), 0, 0);
            }
        $this->data["user_products"] = $product_details;
        $this->smarty->view("front/registry/couple/preview/preview.tpl", $this->data);
    }

    public function share(){
        $this->data["current_user"] = $this->session->userdata("user_session");
        if ($this->data["current_user"][0]["regType"] == "wedding"){
            $table_name = "lucy_couple";
        }
        else{
            $table_name = str_replace("<REG_TYPE>", $this->data["current_user"][0]["regType"], "lucy_<REG_TYPE>_user");
        }
        $this->data["complete_details"] = $this->user_model->custom_get($table_name, array("user_id" => $this->data["current_user"][0]["user_id"]), 0, 0);
        $this->smarty->view("front/registry/couple/share/share.tpl", $this->data);
    }

    public function track(){
        $this->data["current_user"] = $this->session->userdata("user_session");
        if ($this->data["current_user"][0]["regType"] == "wedding"){
            $table_name = "lucy_couple";
        }
        else{
            $table_name = str_replace("<REG_TYPE>", $this->data["current_user"][0]["regType"], "lucy_<REG_TYPE>_user");
        }
        $this->data["complete_details"] = $this->user_model->custom_get($table_name, array("user_id" => $this->data["current_user"][0]["user_id"]), 0, 0);
        $this->smarty->view("front/registry/couple/track/track.tpl", $this->data);
    }

    public function settings(){
        $this->data["current_user"] = $this->session->userdata("user_session");
        if ($this->data["current_user"][0]["regType"] == "wedding"){
            $table_name = "lucy_couple";
        }
        else{
            $table_name = str_replace("<REG_TYPE>", $this->data["current_user"][0]["regType"], "lucy_<REG_TYPE>_user");
        }        $this->data["complete_details"] = $this->user_model->custom_get($table_name, array("user_id" => $this->data["current_user"][0]["user_id"]), 0, 0);
        $this->smarty->view("front/registry/couple/settings.tpl", $this->data);
    }

    public function help(){
        $this->data["current_user"] = $this->session->userdata("user_session");
        if ($this->data["current_user"][0]["regType"] == "wedding"){
            $table_name = "lucy_couple";
        }
        else{
            $table_name = str_replace("<REG_TYPE>", $this->data["current_user"][0]["regType"], "lucy_<REG_TYPE>_user");
        }        $this->data["complete_details"] = $this->user_model->custom_get($table_name, array("user_id" => $this->data["current_user"][0]["user_id"]), 0, 0);
        $this->smarty->view("front/registry/couple/help.tpl", $this->data);
    }
}


