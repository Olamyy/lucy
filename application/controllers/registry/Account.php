<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 2/5/17
 * Time: 12:08 AM
 */

class Account extends CI_Controller
{

    private $data = array();
    private $check;

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('category_model');

        //check if user is already logged-in...
        $this->check = $this->session->userdata('user_session');
        if (empty($check)) redirect('index.php/registry/auth/login');
    }

    public function index()
    {
        print_r($this->check);
    }

    public function cart()
    {

    }

}
