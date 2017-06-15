<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Join extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->model("user_model");
        $this->data["pre_cart"] = $this->user_model->get_cat_details();

    }

    public function index()
    {
        $error = array();
        if (!empty($_POST)) {
            $email = $this->input->post("email");
            $mobile = $this->input->post("mobile");
            $password = $this->input->post("password");
            $reg_type = $this->input->post("regType");
            $ip = $this->input->ip_address();

            if (empty($email)) $error[] = "Provide a Valid Email";
            if (empty($password)) $error[] = "Provide a Valid Password";
            if (empty($reg_type)) $error[] = "Select A Registry";

            if (empty($error)) {
                $check_mobile = $this->user_model->custom_get("lucy_all_users", array("email" => $email), 0, 0);
                if (!$check_mobile) {
                    $hash_password = password_hash($password, PASSWORD_BCRYPT);
                    $user_details = array("mobile" => $mobile,"email"=>$email,
                           "password" => $hash_password,
                            "code" => $this->user_model->get_transaction_code(4),
                            "ip" => $this->input->ip_address(),
                            "date_added" => date("Y-m-d H:i:s"),
                            "regType"=>$reg_type,
                            "cart_id"=>$this->user_model->get_transaction_code(4),
                            "user_id"=>$this->user_model->get_transaction_code(15),"user_status" => 0);
                    $insert = $this->user_model->add("lucy_all_users",$user_details);
                    $this->user_model->add("lucy_misc", array("ip"=>$ip, 'datetime'=>date("Y-m-d H:i:s")), 0, 0);
                    if ($insert && $reg_type =="wedding") {
                        $this->user_model->add("lucy_couple", $user_details);
                            $this->session->set_userdata(array("user_session"=>$insert));
                            redirect("registry/InitCouple");
                    }
                    else{
                        if ($insert) {
                            $table_name = str_replace("<REG_TYPE>", $insert["user_session"][0]["regType"], "lucy_<REG_TYPE>_user");
                            $this->user_model->add("lucy_couple", $table_name);
                            $this->session->set_userdata(array("user_session"=>$insert));
                            redirect("registry/init/".$reg_type);
                        }
                        else
                            $this->data["error"] = "Unable to register your details. Please, check your details.";
                    }

                    }
                else
                    if ($check_mobile && $check_mobile[0]["walkthrough"] == 1){
                        $reg_type = $check_mobile[0]['regType'];
                        if ($reg_type =="wedding") {
                            $this->session->set_userdata(array("user_session"=>$check_mobile));
                            redirect("registry/InitCouple");
                        }
                        else{
                                $this->session->set_userdata(array("user_session"=>$check_mobile));
                                redirect("registry/init/".$reg_type);
                            }
                    }else
                        $this->data["error"] = "This mobile number is already registered";
            }
            else
                $this->data["error"] = $error;
            }
        $this->smarty->view("front/registry/auth/auth_reg.tpl", $this->data);

    }

}
