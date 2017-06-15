<?php

/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 6/8/17
 * Time: 5:36 PM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FBLogin extends CI_Controller {
    function __construct() {
        parent::__construct();

        // Load facebook library
        $this->load->library('facebook');

        //Load user model
        $this->load->model('user_model');
    }

    public function index(){
        $userData = array();

        print_r($this->facebook->is_authenticated());
        // Check if user is logged in
        if($this->facebook->is_authenticated()) {
            // Get user facebook profile details
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

            echo "<pre>";
            print_r($userProfile);
            echo "<pre>";
            exit();
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['username'] = $userProfile['first_name'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/' . $userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];

            $data['user_profile'] = $userData;


            if (!$this->session->has_userdata('session')) {
                $this->session->set_userdata(array('social_login'=>$userData));
            }
            else {
                $this->data['error'] = 'User already exists';
                $this->session->set_userdata('social_login_error',"User already exists and signed in");
            }
        }

        $this->data['loginUrl'] = $this->facebook->login_url();
        redirect('registry/dashboard/',$this->data);
    }

}