<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 4/14/17
 * Time: 4:27 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Sales extends CI_Controller
{

    private $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index(){

        $this->orders();
    }


    public function orders(){
        $order_type = $this->input->get('type');
        if ($order_type == "pending"){
            $this->data['order_details'] = $this->user_model->custom_get("lucy_orders",
                array("order_status" => "pending"), 0, 0);        }
        else if($order_type == "approved"){
            $this->data['order_details'] = $this->user_model->custom_get("lucy_orders",
                array("order_status" => "approved"), 0, 0);        }
        else {
            $this->data['order_details'] = $this->user_model->custom_get("lucy_orders",
                array("order_status" => "rejected"), 0, 0);
        }
        $this->smarty->view('admin/sales/orders.tpl', $this->data);

    }

    public function returns(){
        $return_type = $this->input->get('type');
        if ($return_type == "pending"){
            $this->data['return_details'] = $this->user_model->custom_get("lucy_returns",
                array("return_status" => "pending"), 0, 0);
        }
        else if($return_type == "approved"){
            $this->data['return_details'] = $this->user_model->custom_get("lucy_returns",
                array("return_status" => "approved"), 0, 0);
        }
        else{
            $this->data['return_details'] = $this->user_model->custom_get("lucy_returns",
                array("return_status" => "rejected"), 0, 0);
        }
        $this->smarty->view('admin/sales/returns.tpl', $this->data);
    }


    public function vouchers(){
        $action = $this->input->get('action');
        if ($action == "create"){
            $this->create_voucher();
        }
        else if($action == "view"){
            $this->data['voucher_details'] = $this->user_model->get("lucy_vouchers", 0, 0);
            $this->smarty->view('admin/sales/vouchers/vouchers.tpl', $this->data);
        }

    }

    private function create_voucher()
    {
        $this->smarty->view('admin/sales/vouchers/add.tpl', $this->data);
    }

}