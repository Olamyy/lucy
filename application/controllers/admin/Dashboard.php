<?php
/**
 * Created by PhpStorm.
 * Date: 7/6/16
 * Time: 5:11 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    private $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->database();

        if($this->user_model->auto_logout("admin-user"))
        {
            $this->session->sess_destroy();
            redirect('index.php/admin/login/');
        }
    }

    public function index(){

        $this->data['visitor_count'] = count($this->user_model->get('misc', "", 0, 0));
//
        $this->data['customer_count'] = count($this->user_model->get('couple', "", 0, 0));

        $this->data["online_user_count"] = count($this->user_model->custom_get('couple', array('is_logged_in'=>1), 0, 0));

        $this->smarty->view('admin/dashboard.tpl', $this->data);
    }

}