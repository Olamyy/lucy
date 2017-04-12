<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 3/5/17
 * Time: 7:40 AM
 */
class Checkout extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->helper('cookie');

    }

    public function index()
    {
        $this->cart();
    }

    public function cart(){
        $cat_from_db = $this->user_model->get('lucy_category_description', 0 , 0);
        $pre_cart = array();
            foreach($cat_from_db as $data){
                $loop_cat = array('pre_cat'=>explode(",", $data['sub_categories']));
                $loop_cat = array_replace($data, $loop_cat);
                $pre_cart[] = $loop_cat;
            }
            $this->data['pre_cart'] = $pre_cart;
            $ip = $this->input->ip_address();
            $this->data['user_session'] = $this->session->userdata('user_session');
            $user_details = $this->user_model->custom_get('lucy_user', array('ip'=>$ip), 0, 0);
            if(empty($user_details)){
                $temp_user_cart_data = $this->user_model->custom_get('lucy_temp_user', array('ip'=>$ip), 0, 0);
                $this->data['user_cart_items'] = $this->user_model->custom_get('lucy_user_cart_items', array('cart_id'=>$temp_user_cart_data[0]['cart_id']), 0, 0);
                $pre_cart = array();
                $product_details = array();
                foreach($this->data['user_cart_items'] as $data){
                    $pre_cart[] = $data['product_id'];
                }
                foreach($pre_cart as $product_id){
                    $product_details[] = $this->user_model->custom_get('lucy_product', array('product_id'=>$product_id), 0, 0);
                }
                $this->data['user_products'] = $product_details;
                $temp_user_cart = $this->user_model->custom_get('lucy_temp_user', array('ip'=>$this->data['user_session'][0]['ip']), 0, 0);
                $this->data['user_cart_items'] = $this->user_model->custom_get('lucy_user_cart_items', array('cart_id'=>$temp_user_cart[0]['cart_id']), 0, 0);
                $this->data['product_details'] = $this->user_model->custom_get('lucy_product', array('product_id'=>$this->data['user_cart_items'][0]['product_id']), 0, 0);
                $this->data['user_products'] = $product_details;
                $this->smarty->view('front/registry/cart.tpl', $this->data);
            }
    }

}
