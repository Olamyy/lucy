<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Category extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");

    }

    public function index()
    {
        $this->view();
    }

    public function view()
    {

        $prompt = $this->input->get("prompt");

        if ($prompt == "success") $this->data['message'] = "Operation Successful";

        $this->data["category_details"] = $this->user_model->get("lucy_category_description", 0, 0);

        if (!empty($_POST)) {
            $cat_title = $this->input->post("cat_title");
            $category_id = $this->input->post("c_id");

                $redir = 'admin/category/addsub?c_id='.$category_id.'c_title='.$cat_title;

                redirect($redir);
        }


        $this->smarty->view("admin/product/category/view/view.tpl", $this->data);
    }

    public function add()
    {

        $error = array();
        if (!empty($_POST)) {
            $sub_cat_cats = $this->input->post("sub_cat_cats");
            $category_title = $this->input->post("category_title");
            $short_description = $this->input->post("short_description");
            $cat_url = $this->input->post("cat_url");
            $cat_search_filters = $this->input->post("cat_search_filters");

            if (empty($sub_cat_cats)) $error[] = "Provide valid sub categories";
            if (empty($category_title)) $error[] = "Provide a Category Title";
            if (empty($short_description)) $error[] = "Provide a Short Description";
            if (empty($cat_url)) $error[] = "Provide a  Category URL";
            if (empty($cat_search_filters)) $error[] = "Provide search filters";

            if (empty($error)) {
                $category_details = array("title" => $category_title, "description" => $short_description,
                    "sub_categories" => $sub_cat_cats, "category_url" => $cat_url, "created_on" => date("Y-m-d H:i:s"),
                    "search_filters" => $cat_search_filters, "category_id" => $this->user_model->get_transaction_code(5)
                );
                $insert = $this->user_model->add("lucy_category_description", $category_details);

                if ($insert) {
                    $this->data["message"] = "Successfully Created the category";
                } else
                    $this->data["error"] = "Unable to register your details. Please, check your details.";
            } else
                $this->data["error"] = $error;
        }
        $this->smarty->view("admin/product/category/add.tpl", $this->data);
    }

    public function edit()
    {
        $category_id = $this->input->get("c_id");

        $this->data["cat_details"] = $this->user_model->custom_get("lucy_category_description", array("id"=>$category_id), 0, 0);

        $error = array();

        if (!empty($_POST)) {
            $sub_cat_cats = $this->input->post("sub_cat_cats");
            $category_title = $this->input->post("category_title");
            $short_description = $this->input->post("short_description");
            $cat_url = $this->input->post("cat_url");
            $cat_search_filters = $this->input->post("cat_search_filters");


            if (empty($sub_cat_cats)) $error[] = "Provide valid sub categories";
            if (empty($category_title)) $error[] = "Provide a Category Title";
            if (empty($short_description)) $error[] = "Provide a Short Description";
            if (empty($cat_url)) $error[] = "Provide a  Category URL";
            if (empty($cat_search_filters)) $error[] = "Provide search filters";

            if (empty($error)) {
                $category_details = array("title" => $category_title, "description" => $short_description,
                    "sub_categories" => $sub_cat_cats, "category_url" => $cat_url, "created_on" => date("Y-m-d H:i:s"),
                    "search_filters" => $cat_search_filters, "category_id" => $this->user_model->get_transaction_code(10)
                );
                $insert = $this->user_model->update($category_details,"lucy_category_description",array("id"=>$category_id), 0, 0);


                if ($insert) {
                    $this->data["message"] = "Successfully updated the category";
                    redirect('admin/category/view?prompt=success');
                } else
                    $this->data["error"] = "Unable to update the category. Please, check your details.";
            } else
                $this->data["error"] = $error;
        }
        $this->smarty->view("admin/product/category/edit/edit.tpl", $this->data);

    }

    public function delete()
    {
        $category_id = $this->input->get("c_id");

        if ($this->user_model->delete_data("lucy_category_description",array("id"=>$category_id), 0, 0)){
            redirect('admin/category/view');
        };
        $this->smarty->view("admin/product/category/edit/edit.tpl", $this->data);

    }

    public function addsub()
    {
        $this->data["c_id"] = $this->input->post("c_id");
        $this->data["c_title"] = $this->input->post("cat_title");


        $this->data["existing"] = $this->user_model->custom_get("lucy_sub_category_description" , array("title"=>$this->data["c_title"]), 0, 0);

        if (!empty($_POST)) {
            $sub_cats = $this->input->post("sub_cat_cats");

            $check = $this->user_model->add("lucy_sub_category_description", array('title'=>$this->input->get("c_title") ,
                                            'sub_category_id'=>$this->input->get("c_id"),
                                            'sub_categories'=>$sub_cats, 'created_on'=>date("Y-m-d H:i:s")));
            if (($check)) {
                redirect('admin/category/viewsub?c_id='.$this->data["c_id"]);
            }

        }

        $this->smarty->view("admin/product/category/edit/addsub.tpl", $this->data);
    }

    public function viewsub()
    {
        $mess = $this->input->get("messa");
        if(($mess == 'suc')) {
            $this->data["message"] = 'Successful';
        }
        elseif(($mess == 'err')) {
            $this->data["err"] = 'Oops. An error occurred';
        }

        $this->data["category_details"] = $this->user_model->get("lucy_sub_category_description", 0, 0);
        $this->smarty->view("admin/product/category/view/viewsub.tpl", $this->data);

    }

    public function edit_sub()
    {
        $this->data["c_id"] = $this->input->get("c_id");

        $this->data["cat_details"] = $this->user_model->custom_get("lucy_sub_category_description", array("id"=>$this->data["c_id"]), 0, 0);

        $error = array();

        if (!empty($_POST)) {
            $sub_cat_cats = $this->input->post("sub_cat_cats");
                         $category_details = array( "sub_categories" => $sub_cat_cats);
                    print_r($category_details);
                $insert = $this->user_model->update($category_details,"lucy_sub_category_description",array("id"=>$this->data["c_id"]), 0, 0);
                if ($insert) {
                    $this->data["message"] = "Successfully updated the category";
                    redirect('admin/category/viewsub?messa=suc');
                } else
                    $this->data["error"] = "Unable to update the category. Please, check your details.";
            } else
                $this->data["error"] = $error;

        $this->smarty->view("admin/product/category/edit/editsub.tpl", $this->data);

    }

    public function delete_sub()
    {
        $category_id = $this->input->get("c_id");

        if ($this->user_model->delete_data("lucy_sub_category_description",array("id"=>$category_id), 0, 0)){
            redirect('admin/category/viewsub?messa=suc');
        };
    }

}
