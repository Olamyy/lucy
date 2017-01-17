<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        //check if user is already logged-in...
        $check = $this->session->userdata('user_id');
        if ($check) redirect('welcome/');

    }

    public function index()
    {
        if (!empty($_POST)) {
            $action = $this->input->post('action');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');
            $firstname = $this->input('firstname');
            $lastname = $this->input('lastname');
            $address = $this->input('address');
            $state = $this->input('state');
            $number = $this->input('number');

            if ($action == "login") {
                $this->login($email, $password);
            }
            else
                $this->register($firstname, $lastname, $address, $state, $email, $password, $confirm_password, $number);

        }

        $this->smarty->view('front/auth.tpl');

    }

    private function login($email, $password)
    {
        $error = array();

        if (empty($email)) $error[] = 'Provide a Valid Email';
        if (empty($password)) $error[] = 'Provide a Valid Password';

        if (empty($error)){
            $this->user_model->custom_query();
        }

    }

    private function register($firstname, $lastname, $address, $state, $email, $password, $confirm_password, $number)
    {
        $error = array();

        if (empty($email)) $error[] = 'Provide a Valid Email';
        if (empty($password)) $error[] = 'Provide a Valid Password';
        if (empty($firstname)) $error[] = 'Provide a Valid First Name';
        if (empty($lastname)) $error[] = 'Provide a Valid Last Name';
        if (empty($address)) $error[] = 'Provide a Valid Address';
        if (empty($state)) $error[] = 'Provide a Valid State';
        if (empty($password)) $error[] = 'Provide a Valid Password';
        if (empty($confirm_password)) $error[] = 'Provide a Valid Password';
        if (empty($number)) $error[] = "Provide a valid Mobile Number";

        if (empty($error)){
            $this->isSimilar($password, $confirm_password);
        }

    }

    private function isSimilar($password, $confirm_password)
    {

    }

}



/*
 *
 *
 * $this->load->model('user_model');

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
 *
 */