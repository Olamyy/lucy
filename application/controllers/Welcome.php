<?php


defined("BASEPATH") OR exit("No direct script access allowed");
class Welcome extends CI_Controller
{
  private $data = array();

  public function __construct()
  {
    parent::__construct();
    $this->load->model("user_model");
    $check = $this->session->userdata("user_session");
    if ($check) {
      $this->data["user_details"] = $check;
    }
  }

  public function index()
  {

    $dir = FCPATH."/public/_template/front/assets/images/banners/";
    $this->data["banner"] =array_diff(scandir($dir), array('.', '..'));
    $this->data["ip"] = $this->input->ip_address();
    $cat_from_db = $this->user_model->get("lucy_category_description", 0, 0);
    $this->data["user_session"] = $this->session->userdata("user_session");
    $this->data["is_sub"] = false;

    if ($this->data["user_session"][0]["is_logged_in"] == 1){
        if($this->data["user_session"][0]["regType"] == "wedding"){
            $table_name = "lucy_couple";
        }
      else{
        $table_name = str_replace("<REG_TYPE>", $this->data["user_session"][0]["regType"], "lucy_<REG_TYPE>_user");
      }
        $this->data["complete_details"] = $this->user_model->custom_get($table_name, array("user_id" => $this->data["user_session"][0]["user_id"]), 0, 0);
    }

    $pre_cart = array();
    foreach ($cat_from_db as $data) {
      $loop_cat = array("pre_cat" => explode(",", $data["sub_categories"]), 'has_sub'=>false);
      $loop_cat = array_replace($data, $loop_cat);
      $pre_cart[] = $loop_cat;
    }

    $this->data["pre_cart"] = $pre_cart;
    $this->data["on_home_page"] = $this->user_model->get_random("lucy_product", 15);
    $this->smarty->view("front/store.tpl", $this->data);
  }

}