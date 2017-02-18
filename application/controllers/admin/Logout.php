<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 1/20/17
 * Time: 4:28 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->sess_destroy();

        redirect('index.php/admin/login');
    }

}