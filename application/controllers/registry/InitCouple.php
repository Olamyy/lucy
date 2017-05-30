<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class InitCouple extends CI_Controller
{

    private $data = array();
    private $check_user_ip = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->model("user_model");
        $this->data["pre_cart"] = $this->user_model->get_cat_details();

        ///get user data from session
        $user_session = $this->session->userdata("user_session");
        if ($user_session){
            $this->data["user_session"] = $user_session;
        }

    }

    public function index()
    {
        $error = array();
        $user_ip = $this->input->ip_address();
        $this->check_user_ip = $this->user_model->custom_get("lucy_all_users", array("ip" => $user_ip), 0, 0);

        if (!$this->check_user_ip){
            redirect("index.php/registry/auth/login");
        }

        if (!empty($_POST)) {
            $groom_first_name = $this->input->post("groom_first_name");
            $groom_last_name = $this->input->post("groom_last_name");
            $bride_first_name = $this->input->post("spouse_first_name");
            $bride_last_name = $this->input->post("spouse_last_name");
            $spouse_email = $this->input->post("spouse_email");

            if (empty($groom_first_name)) $error[] = "Provide a groom first name";
            if (empty($groom_last_name)) $error[] = "Provide a groom last name";
            if (empty($bride_first_name)) $error[] = "Provide a bride first name";
            if (empty($bride_last_name)) $error[] = "Provide a bride last name";

            if (empty($error)){
                $couple_details = array("groom_first_name"=>$groom_first_name,"groom_last_name"=>$groom_last_name,
                                        "bride_first_name"=>$bride_first_name,"bride_last_name"=>$bride_last_name,
                                        "spouse_email"=>$spouse_email,"date_modified" => date("Y-m-d H:i:s"));

                $update = $this->user_model->update($couple_details,"lucy_couple", array("user_id"=>$this->check_user_ip[0]["user_id"]));

                if($update){
                    $this->session->set_userdata(array("user_session"=>$update));
                    redirect("registry/InitCouple/conclude");
                }
                else
                    $this->data["error"] = "Unable to save your details. Please, try again.";
            }
            else
                $this->data["error"] = $error;
        }
        $this->smarty->view("front/registry/couple/details.tpl", $this->data);

    }

    public function conclude(){
        $error = array();
        if (!empty($_POST)) {

            $reg_url = $this->input->post("reg_url");
            $wedding_date = $this->input->post("wedding_date");

            if(empty($wedding_date)) $wedding_date ="";

            if (empty($reg_url)) $error[] = "Pick a url tag";

            if (empty($error)){
                $couple_details = array("registry_url_tag"=>$reg_url, "event_date"=>$wedding_date,
                                            "date_modified" => date("Y-m-d H:i:s"), "walkthrough"=>1);

                $update = $this->user_model->update($couple_details, "lucy_couple", array("user_id"=>$this->check_user_ip[0]["user_id"]));
                $this->user_model->update(array("walkthrough"=>1), "lucy_couple", array("user_id"=>$this->check_user_ip[0]["user_id"]));

                if($update){
                    $this->session->set_userdata(array("user_session"=>$update));
                    redirect("registry/dashboard");
                }
                else
                    $this->data["error"] = "Unable to save your details. Please, try again.";
            }
            else{

            }
        }

        $this->smarty->view("front/registry/couple/conclude.tpl", $this->data);
    }
}
