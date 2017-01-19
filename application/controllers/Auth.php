<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
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
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $number = $this->input->post('number');

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
        if (empty($confirm_password)) $error[] = 'Provide a Valid Password';
        if (empty($number)) $error[] = "Provide a valid Mobile Number";

        if (empty($error)){
            $this->isSimilar($password, $confirm_password);

            ///hash password  ...okay
            $hash_password = password_hash($password, PASSWORD_DEFAULT);

            $user_details = array('email'=>$email,'password'=>$hash_password,'firstname'=>$firstname,'lastname'=>
                                    $lastname,'address'=>$address, 'state'=>$state, 'number'=>$this->user_model->msisdn_sanitizer($number),
                                    'user_group_id'=>1,'code'=>$this->user_model->get_transaction_code(),
                                    'ip'=>$this->input->ip_address(),
                                    'status' => 0,
                                        'date_added' => date('Y-m-d H:i:s')
                                  );

            ////save user ...okay
            $insert = $this->user_model->add($user_details, 'lucy_user');

            if ($insert){

                 ///send verification email with code

                $send_mail = $this->send_email($user_details);


                ///redic
                 redirect('index.php/auth/verify');
            }
            else
                $this->data['error'] = "Unable to register your details. Please, check your details.";
            }
        else
            $this->data['error'] = "Your passwords are not similar";

            $this->smarty->view('front/auth.tpl', $this->data);

    }

    private function isSimilar($password, $confirm_password)
    {
        if ($password === $confirm_password){
            return true;
        }
        else
            return false;
    }


    public function verify(){

        $this->smarty->view('front/verify.tpl');

    }

    private function send_email($user_details)
    {
        ///////////////////////////SendGrid Config///////////////////////////
        $config = Array(
            'protocol' => 'sendmail',
            'smtp_host' => 'smtp.sendgrid.net',
            'smtp_port' => 587,
            'smtp_user' => 'apikey',
            'smtp_pass' => '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',
            'smtp_timeout' => '4',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->send();
    }

}
