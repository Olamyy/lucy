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

    }

    public function index()
    {

    }


    public function manage(){
        $this->data['user_session'] = $this->session->userdata('user_session');
        $couple_id = $this->data['user_session'][0]['couple_id'];
        $this->data['couple_details'] = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_id), 0, 0);
        $this->data['bg_images'] = scandir(FCPATH.'/public/_template/uploads/files', 1);
        $this->data['registry_details'] = $this->user_model->custom_get('lucy_registry_items', array('couple_id'=>$couple_id), 0, 0);
        $this->data['ip'] = $this->input->ip_address();
        $pre_cart = array();
        $product_details = array();
        foreach($this->data['registry_details'] as $data){
            $pre_cart[] = $data['product_id'];
        }
        foreach($pre_cart as $product_id){
            $product_details[] = $this->user_model->custom_get('lucy_product', array('product_id'=>$product_id), 0, 0);
        }
        $this->data['user_products'] = $product_details;
        $this->smarty->view('front/registry/couple/dashboard/manage.tpl', $this->data);
    }

    public function preview()
    {
        $preview_id = $this->input->get('preview_id');
        ///Check if couple_id is valid

        if ($this->user_model->custom_get('lucy_couple', array('couple_id' => $preview_id), 0, 0)) {
            $this->data['user_session'] = $this->session->userdata('user_session');
            $couple_id = $this->data['user_session'][0]['couple_id'];
            $this->data['couple_details'] = $this->user_model->custom_get('lucy_couple', array('couple_id'=>$couple_id), 0, 0);
            $this->data['registry_details'] = $this->user_model->custom_get('lucy_registry_cart_items', array('couple_id'=>$couple_id), 0, 0);
            $this->data['ip'] = $this->input->ip_address();
            $pre_cart = array();
            $product_details = array();
            foreach($this->data['registry_details'] as $data){
                $pre_cart[] = $data['product_id'];
            }
            foreach($pre_cart as $product_id){
                $product_details[] = $this->user_model->custom_get('lucy_product', array('product_id'=>$product_id), 0, 0);
            }
            $this->data['user_products'] = $product_details;
            $this->smarty->view('front/registry/couple/preview/preview.tpl', $this->data);
        } else {
            $this->data['error'] = "Could not start preview";
            $this->smarty->view('front/registry/couple/dashboard/manage.tpl', $this->data);
    }
    }

    public function share(){
        $this->data['user_session'] = $this->session->userdata();
        $this->smarty->view('front/registry/couple/share/share.tpl', $this->data);
    }

    public function track(){
        $this->data['user_session'] = $this->session->userdata();
        $this->smarty->view('front/registry/couple/track/track.tpl', $this->data);
    }

    public function settings(){
        $this->data['user_session'] = $this->session->userdata();
        $this->smarty->view('front/registry/couple/settings.tpl', $this->data);
    }

    public function help(){
        $this->data['user_session'] = $this->session->userdata();
        $this->smarty->view('front/registry/couple/help.tpl', $this->data);
    }
}


