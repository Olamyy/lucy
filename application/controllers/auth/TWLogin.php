<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 6/9/17
 * Time: 7:44 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class TWLogin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(array('twconnect'));
    }
    public function index()
    {
        $this->redirect();
    }

    public function redirect() {

        if($this->session->has_userdata("user_session")){
            redirect('registry/dashboard');
        }

        $ok = $this->twconnect->twredirect('TWLogin/callback');

        if (!$ok) {
            redirect ('auth/login?error=twitterauthfail');
        }

    }


    public function callback() {

        if($this->session->has_userdata("user_session")){
            redirect('registry/dashboard');
        }

        $ok = $this->twconnect->twprocess_callback();

        if ( $ok ) { redirect('registry/dashboard'); }
        else redirect ('auth/login');

    }


    public function success() {

        if($this->session->userdata('login') == true){
            redirect('welcome/profile');
        }

        $this->twconnect->twaccount_verify_credentials();


        $user_profile = $this->twconnect->tw_user_info;

        $arr = array(
            'id' => $user_profile->id,
            'name' => $user_profile->name,
            'screen_name' => $user_profile->screen_name,
            'location' => $user_profile->location,
            'description' => $user_profile->description,
            'profile_image_url' => $user_profile->profile_image_url,
            'email' => $user_profile->email
        );

        $user_data = $this->user_model->custom_get("lucy_all_users", array("email"=>$user_profile->email), 0, 0);


        $this->session->set_userdata('user_session',$user_data);

        redirect('welcome/profile');

    }



    public function failure() {

        if($this->session->userdata('login') == true){
            redirect('welcome/profile');
        }

        echo '<p>Twitter connect failed</p>';
        echo '<p><a href="' . base_url() . 'welcome/logout">Try again!</a></p>';
    }

    public function profile(){
        if($this->session->userdata('login') != true){
            redirect('');
        }
        $contents['user_profile'] = $this->session->userdata('user_profile');
        $this->load->view('profile',$contents);

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('');

    }
}
