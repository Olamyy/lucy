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

        $this->load->library("session");
        $this->load->model("user_model");
        $this->load->helper("cookie");

        $this->data["pre_cart"] = $this->user_model->get_cat_details();
        $user_session = $this->session->has_userdata("user_session");
        if (!$user_session) {
            redirect("index.php/registry/auth/login");
        }
        $this->data["user_session"] = $this->session->userdata("user_session");


    }

    public function index()
    {
        $this->cart();
    }

    public function cart()
    {
        $ip = $this->input->ip_address();
        $user_details = $this->user_model->custom_get("lucy_all_users", array("ip" => $ip), 0, 0);
        if (empty($user_details)) {
            //assume temp and create new user
            $temp_user_id = $this->user_model->get_transaction_code(5);
            $cart_id = $this->user_model->get_transaction_code(10);
            $create_temp_user = $this->create_temp_user($ip, $temp_user_id, $cart_id);
            if ($create_temp_user) {
                $this->data["message"] = "Your cart is currently empty";
            } else
                $this->data["message"] = "Your cart is currently empty";
        } else {
            $temp_user_cart = $this->user_model->custom_get("lucy_temp_user", array("ip" => $ip), 0, 0);
            if ($user_details[0]["is_logged_in"]) {
                $this->data["user_cart_items"] = $this->user_model->custom_get("lucy_user_cart_items",
                    array("cart_id" => $user_details[0]["cart_id"]), 0, 0);
                $pre_cart = array();
                $product_details = array();
                foreach ($this->data["user_cart_items"] as $data) {
                    $pre_cart[] = $data["product_id"];
                }
                foreach ($pre_cart as $product_id) {
                    $product_details[] = $this->user_model->custom_get("lucy_product", array("product_id" => $product_id), 0, 0);
                    $this->data["user_products"] = $product_details;
                    $this->data["user_cart_items"] = $this->user_model->custom_get("lucy_user_cart_items", array("cart_id" => $temp_user_cart[0]["cart_id"]), 0, 0);
                    $this->data["product_details"] = $this->user_model->custom_get("lucy_product", array("product_id" => $this->data["user_cart_items"][0]["product_id"]), 0, 0);
                    $this->data["user_products"] = $product_details;
                }
            } else {
                $temp_user_cart = $this->user_model->custom_get("lucy_temp_user", array("ip" => $ip), 0, 0);
                $this->data["user_cart_items"] = $this->user_model->custom_get("lucy_user_cart_items", array("cart_id" => $temp_user_cart[0]["cart_id"]), 0, 0);
                $this->data["product_details"] = $this->user_model->custom_get("lucy_product", array("product_id" => $this->data["user_cart_items"][0]["product_id"]), 0, 0);
//                    $this->data["user_products"] = $product_details;
            }

        }
        $this->smarty->view("front/registry/cart.tpl", $this->data);
    }


    private function create_temp_user($user_ip, $temp_user_id, $cart_id)
    {

        $temp_user = $this->user_model->add("lucy_temp_user",
            array("user_status" => 0, "temp_user_id" => $temp_user_id,
                "ip" => $user_ip, "date_added" => date("Y-m-d H:i:s"), "cart_id" => $cart_id));
        return $this->user_model->add("lucy_user_cart", array("cart_id" => $temp_user[0]["cart_id"], "user_id" => $temp_user[0]["temp_user_id"],
            "date_added" => date("Y-m-d H:i:s")));

    }

    private function get_all_data()
    {
        $pre_cart = array();
        $product_details = array();
        foreach ($this->data["user_cart_items"] as $data) {
            $pre_cart[] = $data["product_id"];
        }
        foreach ($pre_cart as $product_id) {
            $product_details[] = $this->user_model->custom_get("lucy_product", array("product_id" => $product_id), 0, 0);
            $this->data["user_products"] = $product_details;
            $this->data["user_cart_items"] = $this->user_model->custom_get("lucy_user_cart_items", array("cart_id" => $temp_user_cart[0]["cart_id"]), 0, 0);
            $this->data["product_details"] = $this->user_model->custom_get("lucy_product", array("product_id" => $this->data["user_cart_items"][0]["product_id"]), 0, 0);
            $this->data["user_products"] = $product_details;
        }

    }


}