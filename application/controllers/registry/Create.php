<?php

class Create extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('admin_model');
        $this->data['pre_cart'] = $this->admin_model->get_cat_details();

        ///get user data from session
        $user_session = $this->session->userdata('user_session');

        if ($user_session){
            $this->data['user_session'] = $user_session;
            if ($user_session[0]['is_logged_in'] == 1){
                       $user_session['coming_from'] = "create_nav";
                        $user_session['redirect'] = "init";
                    $this->session->set_userdata(array('user_session'=>$user_session));
                   redirect('registry/couple/init');
            }
            else{
                $user_session['coming_from'] = "create_nav";
                $user_session['redirect'] = "init";
                $this->session->set_userdata(array('user_session'=>$user_session));
                redirect('registry/auth/login');
            }
        }
        else{
            $user_session['coming_from'] = "create_nav";
            $user_session['redirect'] = "init";
            $this->session->set_userdata(array('user_session'=>$user_session));
            redirect('registry/auth/login');
        }
    }


}