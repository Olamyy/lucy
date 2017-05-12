<?php

/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 5/9/17
 * Time: 3:40 PM
 */
class Init extends CI_Controller
{

    private $data = array();
    private $check_user_ip = array();


    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');

        $this->data['pre_cart'] = $this->user_model->get_cat_details();

        ///get user data from session
        $user_session = $this->session->userdata('user_session');
        if ($user_session){
            $this->data['user_session'] = $user_session;
        }
        $user_ip = $this->input->ip_address();
        $this->check_user_ip = $this->user_model->custom_get('lucy_reg_user', array("ip" => $user_ip), 0, 0);

        if (!$this->check_user_ip){
            redirect('index.php/registry/auth/login');
        }

    }

    public function index()
    {
        $this->session->sess_destroy();
//        print_r($this->session->userdata('user_session'));
    }

    public function houseWarming()    {
        $error = array();
        if (!empty($_POST)) {
            $venue = $this->input->post('venue');
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');

            if (empty($venue)) $error[] = 'Provide a valid venue.';
            if (empty($last_name)) $error[] = 'Provide a first name.';
            if (empty($first_name)) $error[] = 'Provide a last name.';

            if (empty($error)){
                $user_details = array('venue'=>$venue,
                                      'last_name'=>$last_name,
                                      'first_name'=>$first_name,
                                     'date_modified' => date('Y-m-d H:i:s'));

                $update = $this->user_model->update($user_details,'lucy_reg_user', array('user_id'=>$this->check_user_ip[0]['user_id']));

                if($update){
                    $this->session->set_userdata(array('user_session'=>$update));
                    redirect('registry/dashboard');
                }
                else
                    $this->data['error'] = "Unable to save your details. Please, try again.";
            }
            else
                $this->data['error'] = $error;
        }

        $this->smarty->view('front/registry/warming.tpl', $this->data);

    }


    public function Anniv(){
        $error = array();
        if (!empty($_POST)) {
            $venue = $this->input->post('venue');
            $husb_name = $this->input->post('husb_name');
            $wife_name = $this->input->post('wife_name');

            if (empty($venue)) $error[] = 'Provide a valid venue.';
            if (empty($husb_name)) $error[] = 'Provide a name.';
            if (empty($wife_name)) $error[] = 'Provide a name.';

            if (empty($error)){
                $user_details = array('venue'=>$venue,
                    'last_name'=>$wife_name,
                    'first_name'=>$husb_name,
                    'date_modified' => date('Y-m-d H:i:s'));

                $update = $this->user_model->update($user_details,'lucy_reg_user', array('user_id'=>$this->check_user_ip[0]['user_id']));

                if($update){
                    $this->session->set_userdata(array('user_session'=>$update));
                    redirect('registry/dashboard');
                }
                else
                    $this->data['error'] = "Unable to save your details. Please, try again.";
            }
            else
                $this->data['error'] = $error;
        }

        $this->smarty->view('front/registry/anniv.tpl', $this->data);

    }

    public function Birthday(){}

    public function ChildNaming(){}

    public function Lucky(){}



}
