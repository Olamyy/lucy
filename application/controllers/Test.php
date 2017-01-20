<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 1/17/17
 * Time: 11:36 AM
 */

class Test extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }

    public function index(){
        echo FCPATH;
    }
}