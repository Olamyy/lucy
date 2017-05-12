<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 2/21/17
 * Time: 4:34 PM
 */

require APPPATH.'/libraries/REST_Controller.php';



class Updates extends REST_Controller
{

  function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('session');
    }

  public function dashboard_image_get(){
      $couple_id = $this->get('couple_id');
      $bg_image = $this->get('bg_image');

      $error = array();

      if(empty($couple_id)) $error[] = 'Invalid or empty couple id';
      if(empty($bg_image)) $error[] = 'Invalid or empty dashboard image';

      if (empty($error)){

          $couple_details = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_id), 0, 0);

          if(!empty($couple_details)){
              $update_data = array('dashboard_image'=>$bg_image);
              $update = $this->user_model->update($update_data,
                  'lucy_couple',
                  array('couple_id'=>$couple_details[0]['couple_id']));
              if ($update){
                  $response_data = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_details[0]['couple_id']), 0, 0);
                  $this->response_ok($response_data);
              }
          }
      }
      else{
          $this->response_bad('Unable to update dashboard', $error);
      }


  }

  public function vow_message_post(){
      $couple_id = $this->post('couple_id');
      $vow_message = $this->post('vow_message');

      $error = array();

      if (empty($couple_id)) $error[] = "Empty Couple ID";
      if (empty($vow_message)) $error[] = "Empty Vow Message";

      if (empty($error)){
          $couple_details = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_id), 0, 0);
          if (empty($couple_details)){
              $this->response_bad('Invalid Couple ID');
          }
          else{
              $update = $this->user_model->update(array('vow_message'=>$vow_message), 'lucy_couple' ,array('couple_id'=>$couple_id));
              if ($update){
                  $this->session->set_userdata(array('user_session'=>$update));
                  $this->response_ok($update);
              }
              else
                  $this->response_bad('Unable to update vow message');
          }
      }
      else
          $this->response_bad('Invalid Parameters', $error);

  }

  public function vot_of_thanks_post(){
      $couple_id = $this->post('couple_id');
      $vot_message = $this->post('vot_message');

      $error = array();

      if (empty($couple_id)) $error[] = "Empty Couple ID";
      if (empty($vot_message)) $error[] = "Empty Vow Message";

      if (empty($error)){
          $couple_details = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_id), 0, 0);
          if (empty($couple_details)){
              $this->response_bad('Invalid Couple ID');
          }
          else{
              $update = $this->user_model->update(array('vote_of_thanks'=>$vot_message), 'lucy_couple' ,array('couple_id'=>$couple_id));
              if ($update){
                  $this->session->set_userdata(array('user_session'=>$update));
                  $this->response_ok($update);
              }
              else
                  $this->response_bad('Unable to update vow message');
          }
      }
      else
          $this->response_bad('Invalid Parameters', $error);

  }

  public function remove_product_post(){
      $couple_id = $this->post('couple_id');
      $product_id = $this->post('product_id');

      $error = array();

      if (empty($couple_id)) $error[] = "Empty Couple ID";
      if (empty($product_id)) $error[] = "Empty Product ID";

      if (empty($error)){
          $couple_details = $this->user_model->custom_get('lucy_registry_cart_items', array('couple_id'=>$couple_id), 0, 0);
          if (empty($couple_details)){
              $this->response_bad('Invalid Couple ID');
          }
          else{
              $delete = $this->user_model->delete_data('lucy_registry_cart_items' , array('product_id'=>$product_id));
              if ($delete){
                  $this->response_ok($delete);
              }
              else
                  $this->response_bad('Unable to remove item');
          }
      }
      else
          $this->response_bad('Invalid Parameters', $error);

  }

  public function get_ip_get(){
      $ip = $this->input->ip_address();
      $this->response_ok($ip);
    }

  public function logout_post(){
      $couple_id = $this->post('couple_id');
      $user_ip = $this->post('user_ip');

      $error = array();

      if (empty($couple_id)) $error[] = "Empty Couple ID";
      if (empty($user_ip)) $error[] = "Empty User IP";

      if(empty($error)){
          $user_details = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_id), 0, 0);
          if (!empty($user_details)){
              $update = $this->user_model->update(array('is_logged_in'=>0),'lucy_couple', array('couple_id'=>$user_details[0]['couple_id']));
              $this->session->sess_destroy();
              $this->response_ok($update);
          }
          else{
              $this->response_bad('Unable to logout', $error);
          }
      }
      else
          $this->response_bad('Invalid Parameters', $error);
  }

  public function cart_add_post(){
      $user_ip = $this->post('user_ip');
      $product_id = $this->post('product_id');
      $quantity = $this->post('quantity');

      $error = array();
      if (empty($product_id)) $error[] = "Empty Product ID";
      if (empty($user_ip)) $error[] = "Empty User IP";
      if (empty($quantity)) $error[] = "Empty Quantity";

      if (empty($error)){
          $user_details = $this->user_model->custom_get('lucy_user', array('ip'=>$user_ip), 0, 0);
          $product_details = $this->user_model->custom_get('lucy_product', array('product_id'=>$product_id), 0 , 0);
          if(empty($user_details)){
              $temp_user_details = $this->user_model->custom_get('lucy_temp_user', array('ip'=>$user_ip), 0, 0);
              $cart_id = $this->user_model->get_transaction_code(10);
              $temp_user_id = $this->user_model->get_transaction_code(5);
              if(empty($temp_user_details)){
                  ///temp user does not exist
                  $create_temp_user = $this->create_temp_user($user_ip,$temp_user_id, $cart_id);
                  if ($create_temp_user){
                        $add_cart = $this->add_to_cart($create_temp_user[0]['cart_id'], $product_details, $quantity);
                        if ($add_cart){
                            $this->response_ok(array('cart_count'=>count($add_cart), 'cart_data'=>$add_cart));
                                        }
                      else{
                          $this->response_bad('Unable to add item to cart');
                      }
                  }
                  else
                      $this->response_bad('Unable to create temp user');
              }
              else
                  //temp user exists
                  $cart_id = $temp_user_details[0]['cart_id'];
                  //check if user already has product in cart
                    $user_cart = $this->user_model->custom_get('lucy_user_cart_items', array('cart_id'=>$cart_id,
                                    'product_id'=>$product_id), 0 , 0);
                  if(empty($user_cart)){
                      //new product
                      $add_cart = $this->add_to_cart($cart_id, $product_details, $quantity);
                      if ($add_cart){
                          $this->response_ok(array('cart_count'=>count($add_cart), 'cart_data'=>$add_cart));
                      }
                      else{
                          $this->response_bad('Unable to add item to cart');
                      }
                  }
                  else{
                      $update_cart = $this->update_cart($user_cart, $quantity, $product_id);
                      if ($update_cart){
                          $this->response_ok(array('cart_count'=>count($update_cart), 'cart_data'=>$update_cart));
                      }
                      else{
                          $this->response_bad('Unable to update  cart');
                      }
                  }
          }
          else{
              $cart_id = $user_details[0]['cart_id'];
              if($user_details[0]['is_logged_in'] == 0){
                  $error_msg = array('reason'=>'NoLogin');
                  $this->response_bad('You need to login to add to cart', $error_msg);
              }
              else{
                  if (empty($user_details[0]['cart_id'])){
                      $cart_id = $this->user_model->get_transaction_code(10);
                      $add_cart = $this->add_to_cart($cart_id, $product_details, $quantity);
                      if ($add_cart){
                          $this->response_ok($add_cart);
                      }
                      else{
                          $this->response_bad('Unable to add item to cart', $error);
                        }
                  }
                  else
                      if(empty($user_cart)){
                          $add_cart = $this->add_to_cart($cart_id, $product_details, $quantity);
                          if ($add_cart){
                              $this->response_ok($add_cart);
                          }
                          else{
                              $this->response_bad('Unable to add item to cart', $error);
                          }
                      }
                      else{
                          $update_cart = $this->update_cart($user_cart, $quantity, $product_id);
                          if ($update_cart){
                              $this->response_ok($update_cart);
                          }
                          else{
                              $this->response_bad('Unable to add item to cart', $error);
                          }
                      }
              }
          }
      }
      else
          $this->response_bad('Invalid details', $error);

  }

  public function registry_add_post(){
      $user_ip = $this->post('user_ip');
      $product_id = $this->post('product_id');
      $quantity = $this->post('quantity');
      $couple_id = $this->post('couple_id');

      $error = array();
      if (empty($product_id)) $error[] = "Empty Product ID";
      if (empty($user_ip)) $error[] = "Empty User IP";
      if (empty($quantity)) $error[] = "Empty Quantity";
      if (empty($couple_id)) $error[] = "Empty Couple ID";

      if (empty($error)){
          $couple_details = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_id), 0, 0);
          $product_details = $this->user_model->custom_get('lucy_product', array('product_id'=>$product_id), 0 , 0);
          if (empty($couple_details)){
              $this->response_bad('Invalid Couple', $error);
          }
          else{
              if($couple_details[0]['is_logged_in'] == 0){
                  $this->response_bad('You need to login to add to registry');
              }
              else{
                  if (empty($couple_details[0]['registry_id'])){
                      $registry_id = $this->user_model->get_transaction_code(10);
                      $this->user_model->update(array('registry_id'=>$registry_id), 'lucy_couple', array('couple_id'=>$couple_details[0]['couple_id']));
                      $add_registry = $this->add_to_registry($couple_id, $product_details, $quantity);
                      if ($add_registry){
                          $this->response_ok(array('registry_count'=>count($add_registry),
                              'registry_details'=>$add_registry));
                      }
                      else{
                          $this->response_bad('Unable to add item to registry', $error);
                        }
                  }
                  else
                      $couple_id = $couple_details[0]['couple_id'];
                      $couple_registry = $this->user_model->custom_get('lucy_registry_items
                      ', array('couple_id'=>$couple_id), 0, 0);
                      if(empty($couple_registry)){
                          $add_registry = $this->add_to_registry($couple_id, $product_details , $quantity);
                          if ($add_registry){
                              $this->response_ok($add_registry);
                          }
                          else{
                              $this->response_bad('Unable to add item to registry', $error);
                          }
                      }
                      else{
                          //check if product already exists in registry
                          $product_check = $this->user_model->custom_get('lucy_registry_items', array('product_id'=>$product_id), 0, 0);
                          if(empty($product_check)){
                              $add_new_product = $this->add_to_registry($couple_id, $product_details , $quantity);
                              if ($add_new_product){
                                  $this->response_ok($add_new_product);
                              }
                              else{
                                  $this->response_bad('Unable to add item to registry', $error);
                              }
                          }
                          else{
                              $update_registry = $this->update_registry($product_check, $quantity);
                              if ($update_registry){
                                  $this->response_ok($couple_registry);
                              }
                              else{
                                  $this->response_bad('Unable to add item to registry', $error);
                              }
                          }
                      }
              }
          }
      }
      else
          $this->response_bad('Invalid details', $error);
  }

  private function create_temp_user($user_ip, $temp_user_id , $cart_id)
    {

        $temp_user = $this->user_model->add('lucy_temp_user',
            array('user_status'=>0, 'temp_user_id'=>$temp_user_id,
                'ip'=>$user_ip,'date_added'=>date('Y-m-d H:i:s'), 'cart_id'=>$cart_id));
            return $this->user_model->add('lucy_user_cart', array('cart_id'=>$temp_user[0]['cart_id'], 'user_id'=>$temp_user[0]['temp_user_id'],
                'date_added'=>date('Y-m-d H:i:s')));

    }

  private function add_to_cart($cart_id, $product_details, $quantity)
    {
        $this->user_model->update(array('date_modified'=>date('Y-m-d H:i:s')), 'lucy_user_cart',
            array('cart_id'=>$cart_id), 0, 0);
        
        return $this->user_model->add('lucy_user_cart_items', array('cart_item_id' => $this->user_model->get_transaction_code(7),
                'cart_id' => $cart_id, 'product_id' => $product_details[0]['product_id'], 'quantity' => $quantity, 'price' => $product_details[0]['price'],
                'image' => $product_details[0]['image'], 'date_added'=>date('Y-m-d H:i:s')));
    }

  private function update_cart($user_cart, $quantity, $product_id)
    {

        $this->user_model->update(array('date_modified'=>date('Y-m-d H:i:s')), 'lucy_user_cart',
            array('cart_id'=>$user_cart[0]['cart_id']), 0, 0);

        if ($this->user_model->update(array('quantity'=>$user_cart[0]['quantity'] + $quantity), 'lucy_user_cart_items'
                                            ,array('cart_item_id'=>$user_cart[0]['cart_item_id'],
                                'cart_id'=>$user_cart[0]['cart_id'], 'product_id'=>$product_id))){
            return $this->user_model->custom_get('lucy_user_cart_items', array('cart_id'=>$user_cart[0]['cart_id']), 0,0);
        };
    }

  private function add_to_registry($couple_id,$product_details, $quantity)
    {
        return $this->user_model->add('lucy_registry_items', array('registry_item_id' => $this->user_model->get_transaction_code(7),
            'product_id' => $product_details[0]['product_id'], 'quantity' => $quantity, 'price' => $product_details[0]['price'],
            'image' => $product_details[0]['image'], 'couple_id'=>$couple_id, 'date_added'=>date('Y-m-d H:i:s')));
    }

  private function update_registry($couple_registry, $quantity)
    {
        return $this->user_model->update(array('quantity'=>$couple_registry[0]['quantity'] + $quantity), 'lucy_registry_items'
            ,array('registry_item_id'=>$couple_registry[0]['registry_item_id']));
    }

  public function get_ip_post(){
        $ip = $this->input->ip_address();
        $this->response_ok($ip);
    }



}