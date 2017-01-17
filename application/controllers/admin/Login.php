<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        //check if user is already logged-in...
        $check = $this->session->userdata('admin-user');
        if($check) redirect('admin/dashboard/');
    }

    public function index()
    {
        $error = array();
        if (!empty($_POST)) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');


            if (empty($username)) $error[] = 'Provide a Valid Username';
            if (empty($password)) $error[] = 'Provide a Valid Password';


            if (empty($error)) {
                if ($username == $this->config->item("admin_username") && $password == $this->config->item("admin_password")) {
                    //set session here okay.....
                    $this->session->set_userdata('admin-user', array('username' => 'admin', 'full_name' => 'Administrator', 'privilege' => 1, 'status' => 1));
                    redirect('index.php/admin/dashboard/');
                } else
                    $this->data['error'] = array('Invalid Username Or Password');
            } else
                $this->data['error'] = $error;
        }
        $this->smarty->view('admin/auth.tpl', $this->data);
    }

}





/*
 * $data = array();
        $error = array();

        if(!empty($_POST)){
        $username = $this->input->post('user');
        $password = $this->input->post('password');


        if (empty($username)) $error[] = 'Provide a Valid Username';
        if (empty($password)) $error[] = 'Provide a Valid Password';

        if (empty($error)){
            if ($username == 'insta' && $password == 'driver'){
                //set session here okay.....
                $this->session->set_userdata('admin-user', array('username'=>'admin','full_name'=>'Administrator','privilege'=>1,'status'=>1));
                redirect('admin/dashboard/');
            }
            else
                $data['error'] = array('Invalid Username and Password');
        }
        else
            $data['error'] = $error;
        }

 */