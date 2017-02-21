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
        $this->load->model('admin_model');
        $this->data['pre_cart'] = $this->admin_model->get_cat_details();

    }

    public function index()
    {
        $error = array();
        if (!empty($_POST)) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if (empty($email)) $error[] = 'Provide a Valid Email';
            if (empty($password)) $error[] = 'Provide a Valid Password';

            if (empty($error)) {
                $check_email = $this->user_model->custom_get('lucy_couple',array('email' => $email), 0, 0);
                if (!$check_email) {
                    $hash_password = password_hash($password, PASSWORD_BCRYPT);
                    $user_details = array('email' => $email, 'password' => $hash_password,
                        'code' => $this->user_model->get_transaction_code(4),
                        'couple_id' => $this->user_model->get_transaction_code(15),
                        'ip' => $this->input->ip_address(),
                        'couple_status' => 0,
                        'date_added' => date('Y-m-d H:i:s'),
                        'registry_id'=>$this->user_model->get_transaction_code(10));

                    $insert = $this->user_model->add($user_details, 'lucy_couple');

                    if ($insert) {
                        redirect('index.php/registry/couple/init');
                    } else
                        $this->data['error'] = "Unable to register your details. Please, check your details.";
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
