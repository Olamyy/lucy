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
        $this->check_user_ip = $this->user_model->custom_get('lucy_all_users', array("ip" => $user_ip), 0, 0);

        if (!$this->check_user_ip){
            redirect('auth/login');
        }

    }

    public function index()
    {
        $this->session->sess_destroy();
    }

    public function houseWarming()
    {
        $error = array();
        if (!empty($_POST)) {
            $venue = $this->input->post('venue');
            $name = $this->input->post('name');
            $event_date = $this->input->post('event_date');
            $registry_url_tag = $this->input->post('registry_url_tag');

            if (empty($venue)) $error[] = 'Provide a valid venue.';
            if (empty($name)) $error[] = 'Provide  name.';
            if (!$this->check_url_tag($registry_url_tag)) $error[] = str_replace('<URLTAG>', $registry_url_tag, 'The url tag <URLTAG> has been taken');

            if (empty($error)) {
                $user_details = array('venue' => $venue,
                    'name' => $name,
                    'date_modified' => date('Y-m-d H:i:s'),
                    'user_id' => $this->check_user_ip[0]['user_id'],
                    'user_status' => $this->check_user_ip[0]['user_status'],
                    'code' => $this->check_user_ip[0]['code'],
                    'date_added' => $this->check_user_ip[0]['date_added'],
                    'regType' => $this->check_user_ip[0]['date_added'],
                    'event_date' => date('Y-m-d H:i:s', strtotime($event_date)),
                    'email' => $this->check_user_ip[0]['email'],
                    'ip' => $this->check_user_ip[0]['ip'],
                    'registry_url_tag' => $registry_url_tag,
                    'password' => $this->check_user_ip[0]['password'],

                );

                $update = $this->user_model->add('lucy_houseWarming_user', $user_details);

                if ($update) {
                    $this->update_all_users($this->check_user_ip[0]['user_id'], $registry_url_tag);
                    $this->session->set_userdata(array('user_session' => $update));
                    redirect('registry/dashboard');
                } else
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
            $name = $this->input->post('name');
            $years_of_marriage = $this->input->post('years_of_marriage');
            $event_date = $this->input->post('event_date');
            $registry_url_tag = $this->input->post('registry_url_tag');
            if (!$this->check_url_tag($registry_url_tag)) $error[] = str_replace('<URLTAG>', $registry_url_tag, 'The url tag <URLTAG> has been taken');


            if (empty($venue)) $error[] = 'Provide a valid venue.';
            if (empty($name)) $error[] = 'Provide a name.';

            if (empty($error)){
                $user_details = array('venue'=>$venue,
                    'name'=>$name,
                    'date_modified' => date('Y-m-d H:i:s'),
                    'user_id'=>$this->check_user_ip[0]['user_id'],
                    'user_status'=>$this->check_user_ip[0]['user_status'],
                    'code'=>$this->check_user_ip[0]['code'],
                    'date_added'=>$this->check_user_ip[0]['date_added'],
                    'regType'=>$this->check_user_ip[0]['date_added'],
                    'event_date'=>date('Y-m-d H:i:s', strtotime($event_date)),
                    'email'=>$this->check_user_ip[0]['email'],
                    'ip'=>$this->check_user_ip[0]['ip'],
                    'years_of_marriage'=>$years_of_marriage,
                    'registry_url_tag'=>$registry_url_tag,
                    'password'=>$this->check_user_ip[0]['password'],
                );

                $update = $this->user_model->add('lucy_anniv_user',$user_details);
                if($update){
                    $this->update_all_users($this->check_user_ip[0]['user_id'], $registry_url_tag);
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

    public function Birthday()
    {
        $error = array();
        if (!empty($_POST)) {
            $venue = $this->input->post('venue');
            $name = $this->input->post('name');
            $event_date = $this->input->post('event_date');
            $registry_url_tag = $this->input->post('registry_url_tag');
            if (!$this->check_url_tag($registry_url_tag)) $error[] = str_replace('<URLTAG>', $registry_url_tag, 'The url tag <URLTAG> has been taken');


            if (empty($name)) $error[] = 'Provide a name.';

            if (empty($error)){

                $user_details = array('venue'=>$venue,
                    'name'=>$name,
                    'date_modified' => date('Y-m-d H:i:s'),
                    'user_id'=>$this->check_user_ip[0]['user_id'],
                    'user_status'=>$this->check_user_ip[0]['user_status'],
                    'code'=>$this->check_user_ip[0]['code'],
                    'date_added'=>$this->check_user_ip[0]['date_added'],
                    'regType'=>$this->check_user_ip[0]['date_added'],
                    'event_date'=>date('Y-m-d H:i:s', strtotime($event_date)),
                    'email'=>$this->check_user_ip[0]['email'],
                    'ip'=>$this->check_user_ip[0]['ip'],
                    'registry_url_tag'=>$registry_url_tag,
                    'password'=>$this->check_user_ip[0]['password'],
                );

                $update = $this->user_model->add('lucy_birthday_user',$user_details);
                if($update){
                    $this->update_all_users($this->check_user_ip[0]['user_id'], $registry_url_tag);
                    $this->session->set_userdata(array('user_session'=>$update));
                    redirect('registry/dashboard');
                }
                else
                    $this->data['error'] = "Unable to save your details. Please, try again.";
            }
            else
                $this->data['error'] = $error;
        }

        $this->smarty->view('front/registry/birthday.tpl', $this->data);
    }

    public function ChildNaming()
    {
        $error = array();
        if (!empty($_POST)) {
            $venue = $this->input->post('venue');
            $name = $this->input->post('name');
            $child_name = $this->input->post('child_name');
            $event_date = $this->input->post('event_date');
            $registry_url_tag = $this->input->post('registry_url_tag');
            if (!$this->check_url_tag($registry_url_tag)) $error[] = str_replace('<URLTAG>', $registry_url_tag, 'The url tag <URLTAG> has been taken');


            if (empty($venue)) $error[] = 'Provide a valid venue.';
            if (empty($name)) $error[] = 'Provide a name.';

            if (empty($error)){
                $user_details = array('venue'=>$venue,
                    'name'=>$name,
                    'date_modified' => date('Y-m-d H:i:s'),
                    'user_id'=>$this->check_user_ip[0]['user_id'],
                    'user_status'=>$this->check_user_ip[0]['user_status'],
                    'code'=>$this->check_user_ip[0]['code'],
                    'date_added'=>$this->check_user_ip[0]['date_added'],
                    'regType'=>$this->check_user_ip[0]['date_added'],
                    'event_date'=>date('Y-m-d H:i:s', strtotime($event_date)),
                    'email'=>$this->check_user_ip[0]['email'],
                    'ip'=>$this->check_user_ip[0]['ip'],
                    'child_name'=>$child_name,
                    'password'=>$this->check_user_ip[0]['password'],
                    'registry_url_tag'=>$registry_url_tag
                );

                $update = $this->user_model->add('lucy_naming_user',$user_details);

                if($update){
                    $this->update_all_users($this->check_user_ip[0]['user_id'], $registry_url_tag);
                    $this->session->set_userdata(array('user_session'=>$update));
                    redirect('registry/dashboard');
                }
                else
                    $this->data['error'] = "Unable to save your details. Please, try again.";
            }
            else
                $this->data['error'] = $error;
        }

        $this->smarty->view('front/registry/naming.tpl', $this->data);
    }

    public function Lucky()
    {
        $error = array();
        if (!empty($_POST)) {
            $venue = $this->input->post('venue');
            $name = $this->input->post('name');
            $event_date = $this->input->post('event_date');
            $event_name = $this->input->post('event_name');
            $registry_url_tag = $this->input->post('registry_url_tag');
            if (!$this->check_url_tag($registry_url_tag)) $error[] = str_replace('<URLTAG>', $registry_url_tag, 'The url tag <URLTAG> has been taken');


            if (empty($venue)) $error[] = 'Provide a valid venue.';
            if (empty($name)) $error[] = 'Provide a name.';
            if (empty($event_name)) $error[] = 'Provide a name.';

            if (empty($error)){
                $user_details = array('venue'=>$venue,
                    'name'=>$name,
                    'date_modified' => date('Y-m-d H:i:s'),
                    'user_id'=>$this->check_user_ip[0]['user_id'],
                    'user_status'=>$this->check_user_ip[0]['user_status'],
                    'code'=>$this->check_user_ip[0]['code'],
                    'date_added'=>$this->check_user_ip[0]['date_added'],
                    'regType'=>$this->check_user_ip[0]['regType'],
                    'password'=>$this->check_user_ip[0]['password'],
                    'event_date'=>date('Y-m-d H:i:s', strtotime($event_date)),
                    'email'=>$this->check_user_ip[0]['email'],
                    'ip'=>$this->check_user_ip[0]['ip'],
                    'event_name'=>$event_name,
                    'registry_url_tag'=>$registry_url_tag
                );

                $update = $this->user_model->add('lucy_lucky_user',$user_details);

                if($update){
                    $this->update_all_users($this->check_user_ip[0]['user_id'], $registry_url_tag);
                    $this->session->set_userdata(array('user_session'=>$update));
                    redirect('registry/dashboard');
                }
                else
                    $this->data['error'] = "Unable to save your details. Please, try again.";
            }
            else
                $this->data['error'] = $error;
        }

        $this->smarty->view('front/registry/lucky.tpl', $this->data);
    }

    public function check_url_tag($tag)
    {
        $check = $this->user_model->custom_get('lucy_all_users', array('registry_url'=>$tag), 0, 0);
        if(empty($check))
        {
            return true;
        } else
            return false;
    }

    public function update_all_users($user_id, $tag)
    {
       $this->user_model->update(array('registry_url'=>$tag, 'is_logged_in'=>1), 'lucy_all_users', array('user_id'=>$user_id), 0, 0);
    }
}
