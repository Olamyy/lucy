<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->data['pre_cart'] = $this->user_model->get_cat_details();

    }

    public function index()
    {
        $error = array();
        if (!empty($_POST)) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $reg_type = $this->input->post('regType');
            if (empty($email)) $error[] = 'Provide a Valid Email';
            if (empty($password)) $error[] = 'Provide a Valid Password';

            if (empty($error)) {
                $check_email = $this->user_model->custom_get('lucy_all_users', array('email' => $email), 0, 0);
                if (!$check_email) {
                    $hash_password = password_hash($password, PASSWORD_BCRYPT);
                    $user_details = array('email' => $email, 'password' => $hash_password,
                            'code' => $this->user_model->get_transaction_code(4),
                            'ip' => $this->input->ip_address(),
                            'date_added' => date('Y-m-d H:i:s'),
                            'regType'=>$reg_type);
                    $user_details['user_id'] = $this->user_model->get_transaction_code(15);
                    $user_details['user_status'] = 0;
                    $insert = $this->user_model->add('lucy_all_users',$user_details);
                    if ($insert && $reg_type =='wedding') {
                            $this->session->set_userdata(array('user_session'=>$insert));
                            redirect('registry/initcouple');
                    }
                    else{
                        if ($insert) {
                            $this->session->set_userdata(array('user_session'=>$insert));
                            redirect('registry/init/'.$reg_type);
                        }
                        else
                            $this->data['error'] = "Unable to register your details. Please, check your details.";
                    }

                    }
                else
                    $this->data['error'] = "This email is already registered";
            }
            else
                $this->data['error'] = $error;
            }
        $this->smarty->view('front/registry/auth/auth_reg.tpl', $this->data);

    }

}
