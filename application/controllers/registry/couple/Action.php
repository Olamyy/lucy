<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('admin_model');

    }

    public function index()
    {

    }


    public function manage(){
        $this->data['user_session'] = $this->session->userdata();
        $couple_id = $this->data['user_session']['user_session'][0]['couple_id'];
        $couple_details = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_id), 0, 0);
        print_r($this->data['user_session']['user_session'][0]);
        $this->smarty->view('front/registry/couple/dashboard/manage.tpl', $this->data);
    }

    public function logout(){

        $user_ip = $this->post('user_ip');
        $couple_id = $this->post('couple_id');

        $error = array();
        if(empty($user_ip)) $error[] = 'Empty user ip';
        if(empty($couple_id)) $error[] = 'Enter a couple id';

        $data = array('ip'=>$user_ip, 'couple_id'=>$couple_id);
        $user_exists = $this->user_model->custom_get('lucy_couple', $data, 0, 0);

        $this->user_model->update(array('is_logged_in'=>0), 'lucy_couple', array('couple_id' => $user_exists[0]['couple_id']));
        $this->session->sess_destroy();

        redirect('/');

    }

    public function preview(){
        $preview_id = $this->input->get('preview_id');
        ///Check if couple_id is valid

        if ($this->user_model->custom_get('lucy_couple', array('couple_id'=>$preview_id), 0, 0)){
            $this->data['user_session'] = $this->session->userdata();
            $this->smarty->view('front/registry/couple/preview/preview.tpl', $this->data);
        }else{
            $this->data['error'] = "Could not start preview";
            $this->smarty->view('front/registry/couple/dashboard/manage.tpl', $this->data);
        }
    }

    public function share(){
        $this->smarty->view('front/registry/couple/share/share.tpl');
    }

    public function track(){
        $this->smarty->view('front/registry/couple/track/track.tpl');
    }

    public function settings(){
        $this->smarty->view('front/registry/couple/settings.tpl');
    }

    public function help(){
        $this->smarty->view('front/registry/couple/help.tpl');
    }
}


