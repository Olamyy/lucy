<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 4/14/17
 * Time: 6:14 PM
 */

class Customers extends CI_Controller
{

    private $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index(){

        $this->all();
    }


    public function orders(){

    }

    public function returns(){

    }


    public function vouchers(){

    }


    private function all()
    {
        $this->data['voucher_details'] = $this->user_model->get("lucy_user", 0, 0);
//        $this->smarty->view('admin/sales/vouchers/vouchers.tpl', $this->data);
    }

}