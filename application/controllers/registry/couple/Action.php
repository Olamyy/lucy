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
        $this->smarty->view('front/registry/couple/dashboard/manage.tpl', $this->data);
    }

    public function logout(){
        $this->session->sess_destroy();

        redirect('index.php/');
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


