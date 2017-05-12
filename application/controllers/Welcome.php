<?php


defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller
{
  private $data = array();

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $check = $this->session->userdata('user_session');
    if ($check) {
      $this->data['user_details'] = $check;
//            $this->data['user_details']['product_count'] = count(explode(",",$this->data['user_details']['cart']));
    }
  }

  public function index()
  {
//    $this->data['ip'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $this->data['ip'] = $this->input->ip_address();
    $cat_from_db = $this->user_model->get('lucy_category_description', 0, 0);
    $this->data['user_session'] = $this->session->userdata('user_session');
    $pre_cart = array();
    foreach ($cat_from_db as $data) {
      $loop_cat = array('pre_cat' => explode(",", $data['sub_categories']));
      $loop_cat = array_replace($data, $loop_cat);
      $pre_cart[] = $loop_cat;
    }
    $this->data['pre_cart'] = $pre_cart;
    $this->data['hot_deals'] = $this->user_model->custom_get('lucy_product', array('position' => "Hot Deals"), 0, 0);
    $this->data['special_offer'] = $this->user_model->custom_get('lucy_product', array('position' => "Special Offer"), 0, 0);
    $this->data['special_deals'] = $this->user_model->custom_get('lucy_product', array('position' => "Special Deals"), 0, 0);
    $this->data['new_products'] = $this->user_model->custom_get('lucy_product', array('position' => "New Products"), 0, 0);
    $this->data['featured_products'] = $this->user_model->custom_get('lucy_product', array('position' => "Featured Products"), 0, 0);
    $this->data['best_sellers'] = $this->user_model->custom_get('lucy_product', array('position' => "Best Sellers"), 0, 0);
    $this->data['new_arrivals'] = $this->user_model->custom_get('lucy_product', array('position' => "New Arrivals"), 0, 0);
    $this->data['promo'] = $this->user_model->custom_get('lucy_product', array('position' => "Promo"), 0, 0);

//    echo '<pre>';
//    print_r($this->data['pre_cart']);
//    echo '<pre>';
    $this->smarty->view('front/store.tpl', $this->data);
  }

}