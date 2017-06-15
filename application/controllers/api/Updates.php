<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 2/21/17
 * Time: 4:34 PM
 */

require APPPATH."/libraries/REST_Controller.php";



class Updates extends REST_Controller
{

    private $registry_id = "";

  function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library("session");
    }

  public function dashboard_image_get(){
      $user_id = $this->get("user_id");
      $bg_image = $this->get("bg_image");

      $error = array();

      if(empty($user_id)) $error[] = "Invalid or empty couple id";
      if(empty($bg_image)) $error[] = "Invalid or empty dashboard image";


      if (empty($error)){

          $user_details = $this->user_model->custom_get("lucy_all_users", array("user_id"=>$user_id), 0, 0);

          if(!empty($user_details)){
              $update_data = array("dashboard_image"=>$bg_image);
              if ($user_details[0]["regType"] == "wedding"){
                  $table_name = "lucy_couple";
              }
              else{
                  $table_name = str_replace("<REG_TYPE>", $user_details[0]["regType"], "lucy_<REG_TYPE>_user");
              }              $update = $this->user_model->update($update_data,
                  $table_name,
                  array("user_id"=>$user_details[0]["user_id"]));

              if ($update){
                  $response_data = $this->user_model->custom_get("lucy_couple", array("user_id"=>$user_details[0]["user_id"]), 0, 0);
                  $this->response_ok($response_data);
              }
          }
      }
      else{
          $this->response_bad("Unable to update dashboard", $error);
      }


  }

  public function vow_message_post(){
      $user_id = $this->post("user_id");
      $vow_message = $this->post("vow_message");

      $error = array();

      if (empty($user_id)) $error[] = "Empty Couple ID";
      if (empty($vow_message)) $error[] = "Empty Vow Message";

      if (empty($error)){
          $couple_details = $this->user_model->custom_get("lucy_couple", array("user_id"=>$user_id), 0, 0);
          if (empty($couple_details)){
              $this->response_bad("Invalid Couple ID");
          }
          else{
              $update = $this->user_model->update(array("vow_message"=>$vow_message), "lucy_couple" ,array("user_id"=>$user_id));
              if ($update){
                  $this->session->set_userdata(array("user_session"=>$update));
                  $this->response_ok($update);
              }
              else
                  $this->response_bad("Unable to update vow message");
          }
      }
      else
          $this->response_bad("Invalid Parameters", $error);

  }

  public function vot_of_thanks_post(){
      $user_id = $this->post("user_id");
      $vot_message = $this->post("vot_message");

      $error = array();

      if (empty($user_id)) $error[] = "Empty Couple ID";
      if (empty($vot_message)) $error[] = "Empty Vow Message";

      if (empty($error)){
          $couple_details = $this->user_model->custom_get("lucy_couple", array("user_id"=>$user_id), 0, 0);
          if (empty($couple_details)){
              $this->response_bad("Invalid Couple ID");
          }
          else{
              $update = $this->user_model->update(array("vote_of_thanks"=>$vot_message), "lucy_couple" ,array("user_id"=>$user_id));
              if ($update){
                  $this->session->set_userdata(array("user_session"=>$update));
                  $this->response_ok($update);
              }
              else
                  $this->response_bad("Unable to update vow message");
          }
      }
      else
          $this->response_bad("Invalid Parameters", $error);

  }

  public function remove_product_post(){
      $user_id = $this->post("user_id");
      $product_id = $this->post("product_id");

      $error = array();

      if (empty($user_id)) $error[] = "Empty Couple ID";
      if (empty($product_id)) $error[] = "Empty Product ID";

      if (empty($error)){
          $couple_details = $this->user_model->custom_get("lucy_registry_cart_items", array("user_id"=>$user_id), 0, 0);
          if (empty($couple_details)){
              $this->response_bad("Invalid Couple ID");
          }
          else{
              $delete = $this->user_model->delete_data("lucy_registry_cart_items" , array("product_id"=>$product_id));
              if ($delete){
                  $this->response_ok($delete);
              }
              else
                  $this->response_bad("Unable to remove item");
          }
      }
      else
          $this->response_bad("Invalid Parameters", $error);

  }

  public function get_ip_get(){
      $ip = $this->input->ip_address();
      $this->response_ok($ip);
    }

  public function logout_post(){
      $user_id = $this->post("user_id");
      $user_ip = $this->post("user_ip");

      $error = array();

      if (empty($user_id)) $error[] = "Empty Couple ID";
      if (empty($user_ip)) $error[] = "Empty User IP";

      if(empty($error)){
          $user_details = $this->user_model->custom_get("lucy_all_users", array("user_id"=>$user_id), 0, 0);
          if (!empty($user_details)){
              $update = $this->user_model->update(array("is_logged_in"=>0),"lucy_couple", array("user_id"=>$user_details[0]["user_id"]));
              $this->session->sess_destroy();
              $this->response_ok(array('yo'=>$update, 't'=>'Yeah'));
          }
          else{
              $this->response_bad("Unable to logout");
          }
      }
      else
          $this->response_bad("Invalid Parameters", $error);
  }

  public function cart_add_post(){
      $user_ip = $this->post("user_ip");
      $product_id = $this->post("product_id");
      $quantity = $this->post("quantity");

      $error = array();
      if (empty($product_id)) $error[] = "Empty Product ID";
      if (empty($user_ip)) $error[] = "Empty User IP";
      if (empty($quantity)) $error[] = "Empty Quantity";

      if (empty($error)){
          $user_details = $this->user_model->custom_get("lucy_all_users", array("ip"=>$user_ip), 0, 0);
          $product_details = $this->user_model->custom_get("lucy_product", array("product_id"=>$product_id), 0 , 0);
          if(empty($user_details)){
              $temp_user_details = $this->user_model->custom_get("lucy_temp_user", array("ip"=>$user_ip), 0, 0);
              $cart_id = $this->user_model->get_transaction_code(10);
              $temp_user_id = $this->user_model->get_transaction_code(5);
              if(empty($temp_user_details)){
                  ///temp user does not exist
                  $create_temp_user = $this->create_temp_user($user_ip,$temp_user_id, $cart_id);
                  if ($create_temp_user){
                        $add_cart = $this->add_to_cart($create_temp_user[0]["cart_id"], $product_details, $quantity);
                        if ($add_cart){
                            $this->response_ok(array("cart_count"=>count($add_cart), "cart_data"=>$add_cart));
                                        }
                      else{
                          $this->response_bad("Unable to add item to cart");
                      }
                  }
                  else
                      $this->response_bad("Unable to create temp user");
              }
              else
                  //temp user exists
                  $cart_id = $temp_user_details[0]["cart_id"];
                  //check if user already has product in cart
                    $user_cart = $this->user_model->custom_get("lucy_all_users_cart_items", array("cart_id"=>$cart_id,
                                    "product_id"=>$product_id), 0 , 0);
                  if(empty($user_cart)){
                      //new product
                      $add_cart = $this->add_to_cart($cart_id, $product_details, $quantity);
                      if ($add_cart){
                          $this->response_ok(array("cart_count"=>count($add_cart), "cart_data"=>$add_cart));
                      }
                      else{
                          $this->response_bad("Unable to add item to cart");
                      }
                  }
                  else{
                      $update_cart = $this->update_cart($user_cart, $quantity, $product_id);
                      if ($update_cart){
                          $this->response_ok(array("cart_count"=>count($update_cart), "cart_data"=>$update_cart));
                      }
                      else{
                          $this->response_bad("Unable to update  cart");
                      }
                  }
          }
          else{
              $cart_id = $user_details[0]["cart_id"];
              if($user_details[0]["is_logged_in"] == 0){
                  $error_msg = array("reason"=>"NoLogin");
                  $this->response_bad("You need to login to add to cart", $error_msg);
              }
              else{
                  if (empty($user_details[0]["cart_id"])){
                      $cart_id = $this->user_model->get_transaction_code(10);
                      $add_cart = $this->add_to_cart($cart_id, $product_details, $quantity);
                      if ($add_cart){
                          $this->response_ok($add_cart);
                      }
                      else{
                          $this->response_bad("Unable to add item to cart", $error);
                        }
                  }
                  else
                      if(empty($user_cart)){
                          $add_cart = $this->add_to_cart($cart_id, $product_details, $quantity);
                          if ($add_cart){
                              $this->response_ok($add_cart);
                          }
                          else{
                              $this->response_bad("Unable to add item to cart", $error);
                          }
                      }
                      else{
                          $update_cart = $this->update_cart($user_cart, $quantity, $product_id);
                          if ($update_cart){
                              $this->response_ok($update_cart);
                          }
                          else{
                              $this->response_bad("Unable to add item to cart", $error);
                          }
                      }
              }
          }
      }
      else
          $this->response_bad("Invalid details", $error);

  }

  public function registry_add_post(){
      $user_ip = $this->post("user_ip");
      $product_id = $this->post("product_id");
      $quantity = $this->post("quantity");
      $user_id = $this->post("user_id");

      $error = array();
      if (empty($product_id)) $error[] = "Empty Product ID";
      if (empty($user_ip)) $error[] = "Empty User IP";
      if (empty($quantity)) $error[] = "Empty Quantity";
      if (empty($user_id)) $error[] = "Empty User ID";

      if (empty($error)){
          $user_details = $this->user_model->custom_get("lucy_all_users", array("user_id"=>$user_id), 0, 0);
          if ($user_details[0]["regType"] == "wedding"){
              $table_name = "lucy_couple";
          }
          else{
              $table_name = str_replace("<REG_TYPE>", $user_details[0]["regType"], "lucy_<REG_TYPE>_user");
          }          $product_details = $this->user_model->custom_get("lucy_product", array("product_id"=>$product_id), 0 , 0);
          if (empty($user_details)){
              $this->response_bad("Invalid Couple", $error);
          }
          else{
              if($user_details[0]["is_logged_in"] == 0){
                  $this->response_bad("You need to login to add to registry");
              }
              else {
                  if (empty($user_details[0]["registry_id"])) {
                      $this->registry_id = $this->user_model->get_transaction_code(10);
                      $add_registry = $this->add_to_registry($user_id, $product_details, $quantity, $this->registry_id,  $table_name);
                      if ($add_registry) {
                          $this->response_ok(array("registry_count" => count($add_registry),
                              "registry_details" => $add_registry));
                      } else {
                          $this->response_bad("Unable to add item to registry", $error);
                      }
                  } else {
                      $user_id = $user_details[0]["user_id"];
                      $user_registry = $this->user_model->custom_get("lucy_registry_items
                      ", array("user_id" => $user_id), 0, 0);
                      if (empty($user_registry)) {
                          $add_registry = $this->add_to_registry($user_id, $product_details, $quantity, $this->registry_id,  $table_name);
                          if ($add_registry) {
                              $this->response_ok($add_registry);
                          } else {
                              $this->response_bad("Unable to add item to registry", $error);
                          }
                      } else {
                          //check if product already exists in registry
                          $product_check = $this->user_model->custom_get("lucy_registry_items", array("product_id" => $product_id, "user_id"=>$user_id), 0, 0);
                          if (empty($product_check)) {
                              $add_new_product = $this->add_to_registry($user_id, $product_details, $quantity, $this->registry_id,  $table_name);
                              if ($add_new_product) {
                                  $this->response_ok($add_new_product);
                              } else {
                                  $this->response_bad("Unable to add item to registry", $error);
                              }
                          } else {
                              $update_registry = $this->update_registry($product_check, $quantity);
                              if ($update_registry) {
                                  $this->response_ok($user_registry);
                              } else {
                                  $this->response_bad("Unable to add item to registry", $error);
                              }
                          }
                      }
                  }
              }

          }
      }
      else
          $this->response_bad("Invalid details", $error);
  }

  private function create_temp_user($user_ip, $temp_user_id , $cart_id)
    {

        $temp_user = $this->user_model->add("lucy_temp_user",
            array("user_status"=>0, "temp_user_id"=>$temp_user_id,
                "ip"=>$user_ip,"date_added"=>date("Y-m-d H:i:s"), "cart_id"=>$cart_id));
            return $this->user_model->add("lucy_all_users_cart", array("cart_id"=>$temp_user[0]["cart_id"], "user_id"=>$temp_user[0]["temp_user_id"],
                "date_added"=>date("Y-m-d H:i:s")));

    }

  private function add_to_cart($cart_id, $product_details, $quantity)
    {
        $this->user_model->update(array("date_modified"=>date("Y-m-d H:i:s")), "lucy_all_users_cart",
            array("cart_id"=>$cart_id), 0, 0);
        
        return $this->user_model->add("lucy_all_users_cart_items", array("cart_item_id" => $this->user_model->get_transaction_code(7),
                "cart_id" => $cart_id, "product_id" => $product_details[0]["product_id"], "quantity" => $quantity, "price" => $product_details[0]["price"],
                "image" => $product_details[0]["image"], "date_added"=>date("Y-m-d H:i:s")));
    }

  private function update_cart($user_cart, $quantity, $product_id)
    {

        $this->user_model->update(array("date_modified"=>date("Y-m-d H:i:s")), "lucy_all_users_cart",
            array("cart_id"=>$user_cart[0]["cart_id"]), 0, 0);

        if ($this->user_model->update(array("quantity"=>$user_cart[0]["quantity"] + $quantity), "lucy_all_users_cart_items"
                                            ,array("cart_item_id"=>$user_cart[0]["cart_item_id"],
                                "cart_id"=>$user_cart[0]["cart_id"], "product_id"=>$product_id))){
            return $this->user_model->custom_get("lucy_all_users_cart_items", array("cart_id"=>$user_cart[0]["cart_id"]), 0,0);
        };
    }
  public function delete_product_post(){
        $user_id = $this->post("user_id");
        $product_id = $this->post("product_id");

        $error = array();

        if (empty($user_id)) $error[] = "Empty Couple ID";
        if (empty($product_id)) $error[] = "Empty Product ID";

        if (empty($error)){
            $couple_details = $this->user_model->custom_get("lucy_registry_cart_items", array("user_id"=>$user_id), 0, 0);
            if (empty($couple_details)){
                $this->response_bad("Invalid Couple ID");
            }
            else{
                $delete = $this->user_model->delete_data("lucy_registry_cart_items" , array("product_id"=>$product_id));
                if ($delete){
                    $this->response_ok($delete);
                }
                else
                    $this->response_bad("Unable to remove item");
            }
        }
        else
            $this->response_bad("Invalid Parameters", $error);

    }

  private function add_to_registry($user_id,$product_details, $quantity, $registry_id, $table_name)
    {
        $this->user_model->update(array("registry_id"=> $registry_id),"lucy_all_users", array("user_id"=>$user_id), 0, 0);
        $this->user_model->update(array("registry_id"=>$registry_id),
            $table_name, array("user_id"=>$user_id), 0, 0);

        return $this->user_model->add("lucy_registry_items", array("registry_item_id" => $this->user_model->get_transaction_code(7),
            "product_id" => $product_details[0]["product_id"], "quantity" => $quantity, "price" => $product_details[0]["price"],
            "image" => $product_details[0]["image"], "user_id"=>$user_id, "date_added"=>date("Y-m-d H:i:s")));
    }

  private function update_registry($product_check, $quantity)
    {
        return $this->user_model->update(array("quantity"=>$product_check[0]["quantity"] + $quantity), "lucy_registry_items"
            ,array("registry_item_id"=>$product_check[0]["registry_item_id"]));
    }

  public function get_ip_post(){
        $ip = $this->input->ip_address();
        $this->response_ok($ip);
    }

  public function get_cart_data_get()
  {
      $user_ip = $this->post("user_ip");
      $cart_id = $this->user_model->custom_get("lucy_all_users", array("ip" => $user_ip), 0, 0);
      $cart_data = $this->user_model->custom_get("lucy_user_cart_items" ,array("cart_id" => $cart_id),  0, 0);
      print_r($cart_id);
      if($cart_data){
            print_r($cart_data);
      }
    else{
        $this->response_bad("Unable to get data");
    }

  }

  public function review_product_post(){
      $ip = $this->input->ip_address();
      $product_id = $this->post("product_id");
      $stars = $this->post("stars");
      $review = $this->post("review");
      $name = $this->post("name");

      $error = array();
      if (empty($product_id)) $error[] = "Empty Product ID";
      if (empty($ip)) $error[] = "Empty User IP";
      if (empty($stars)) $error[] = "Select a star";
      if (empty($review)) $error[] = "Enter a review";
      if (empty($name)) $error[] = "Enter your name";

      if (empty($error)){
          $data = array("product_id"=>$product_id, "ip"=>$ip, "stars"=>$stars, "review"=>$review, "reviewer_name"=>$name);
          $review_data = $this->user_model->add("lucy_product_review", $data);
          if($review_data){
              $this->response_ok($review_data);
          }
          else{
              $this->response_bad("Unable to review product", $error);
          }
      }
      else{
          $this->response_bad("Unable to review product", $error);
      }
  }


}