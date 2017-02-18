<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('admin_model');
        $this->data['pre_cart'] = $this->admin_model->get_cat_details();

        //check if user is already logged-in...
        $check = $this->session->userdata('user_session');
        if ($check) redirect('index.php/registry/couple/dashboard');

    }


    public function index()
    {

        if (!empty($_POST)) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $redirect_uri = $this->input->get('redirect');
            $ip = $this->input->ip_address();

            print_r($ip);


            if (empty($email)) $error[] = 'Provide a Valid Email';
            if (empty($password)) $error[] = 'Provide a Valid Password';

            if (empty($error)){
                //verify email
                $couple_data = $this->user_model->custom_get('lucy_couple', array('email'=>$email), 0, 0);


                //misc update
                $user_ip = $this->user_model->custom_get('misc', array('ip'=>$ip), 0, 0);

                if ($couple_data){
                    $couple_password = $couple_data[0]['password'];

                    ///verify password
                    if (password_verify($password, $couple_password)){
                        $this->user_model->update(array('is_logged_in'=>1),'lucy_couple',  array('email'=>$email));
                        $this->user_model->update(array('login_attempt'=>$user_ip['login_attempt'] + 1,
                            'success_login'=>$user_ip['success_login'] + 1),'misc',  array('ip'=>$ip));
                        $this->session->set_userdata(array('user_session'=>$this->user_model->custom_get('lucy_couple', array('email'=>$email), 0, 0)));
                        if (empty($redirect_uri)){
                            redirect('index.php/registry/couple/dashboard');
                        }
                        else
                            redirect('couple/init');
                    }
                    else
                        $this->user_model->update(array('login_attempt'=>$user_ip[0]['login_attempt'] + 1,
                            'failed_login'=>$user_ip[0]['failed_login'] + 1),'misc',  array('ip'=>$ip));
                        $this->data['error'] = "Invalid Password";
                }
                else{
                    $user_data = $this->user_model->custom_get('lucy_user', array('email'=>$email), 0, 0);
                    $user_password = $user_data[0]['password'];
                    if ($user_data){
                        if (password_verify($password, $user_password)){
                            $this->user_model->update(array('is_logged_in'=>1),'lucy_user',  array('email'=>$email));
                            $this->user_model->update(array('login_attempt'=>$user_ip['login_attempt'] + 1,
                                'success_login'=>$user_ip['success_login'] + 1),'misc',  array('ip'=>$ip));
                            $this->session->set_userdata(array('user_session'=>$this->user_model->custom_get('lucy_couple', array('email'=>$email), 0, 0)));
                            redirect('/');
                        }
                        else
                            $this->user_model->update(array('login_attempt'=>$user_ip['login_attempt'] + 1,
                                'failed_login'=>$user_ip['failed_login'] + 1),'misc',  array('ip'=>$ip));
                        $this->data['error'] = "Invalid Password";
                    }
                    else
                        $this->user_model->update(array('login_attempt'=>$user_ip['login_attempt'] + 1,
                            'failed_login'=>$user_ip['failed_login'] + 1),'misc',  array('ip'=>$ip));
                    $this->data['error'] = "Invalid Email";
                }
            }
        }
            $this->smarty->view('front/registry/auth/auth_login.tpl', $this->data);


    }

    public function nosession(){
        $this->user_model->delete_data('lucy_couple', array('ip'=>$this->session->userdata('user_session')['ip']));
        $this->session->sess_destroy();
        redirect('index.php/registry/auth/login');
    }

}
