<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }

    public function index()
    {
        $this->view();
    }

    public function view()
    {


        $category_details = $this->user_model->get("lucy_category_description", 0, 0);


        $this->data["category_details"] = $category_details;

        $error = array();
        if (!empty($_POST)){
            $cat_title = $this->input->post('cat_title');

            if (empty($cat_title)) $error[] = "The field cannot be empty.";

            if (empty($error)){
                $check = $this->user_model->custom_get("lucy_category_description",
                    array("title" => $cat_title), 0, 0);
                if ($check) {
                    $this->data['cat_details'] = $check;
                    $this->session->set_userdata('cat_details', $check);
                    redirect('index.php/admin/category/edit');
                } else
                    $this->data["error"] = "The category provided does not exist";
            }
            else
                $this->data['error'] = $error;
        }
        $this->smarty->view("admin/product/category/view/view.tpl", $this->data);
    }


    public function add()
    {
        $error = array();
        if (!empty($_POST)) {
            $sub_cat_cats = $this->input->post('sub_cat_cats');
            $category_title = $this->input->post('category_title');
            $short_description = $this->input->post('short_description');
            $cat_url = $this->input->post('cat_url');
            $cat_search_filters = $this->input->post('cat_search_filters');

            if (empty($sub_cat_cats)) $error[] = 'Provide valid sub categories';
            if (empty($category_title)) $error[] = 'Provide a Category Title';
            if (empty($short_description)) $error[] = 'Provide a Short Description';
            if (empty($cat_url)) $error[] = 'Provide a  Category URL';
            if (empty($cat_search_filters)) $error[] = 'Provide search filters';

            if (empty($error)) {
                $category_details = array("title" => $category_title, "description" => $short_description,
                    "sub_categories" => $sub_cat_cats, "category_url" => $cat_url, "created_on" => date('Y-m-d H:i:s'),
                    "search_filters" => $cat_search_filters, "category_id" => $this->user_model->get_transaction_code(5)
                );
                $insert = $this->user_model->add("lucy_category_description", $category_details);

                if ($insert) {
                    $this->data["message"] = "Successfully Created the category";
                } else
                    $this->data['error'] = "Unable to register your details. Please, check your details.";
            } else
                $this->data['error'] = $error;
        }
        $this->smarty->view('admin/product/category/add.tpl', $this->data);
    }


    public function edit()
    {
        $this->data['cat_details'] = $this->session->userdata('cat_details');

        $error = array();
        if (!empty($_POST)) {
            $sub_cat_cats = $this->input->post('sub_cat_cats');
            $category_title = $this->input->post('category_title');
            $short_description = $this->input->post('short_description');
            $cat_url = $this->input->post('cat_url');
            $cat_search_filters = $this->input->post('cat_search_filters');

            if (empty($sub_cat_cats)) $error[] = 'Provide valid sub categories';
            if (empty($category_title)) $error[] = 'Provide a Category Title';
            if (empty($short_description)) $error[] = 'Provide a Short Description';
            if (empty($cat_url)) $error[] = 'Provide a  Category URL';
            if (empty($cat_search_filters)) $error[] = 'Provide search filters';

            if (empty($error)) {
                $category_details = array("title" => $category_title, "description" => $short_description,
                    "sub_categories" => $sub_cat_cats, "category_url" => $cat_url, "created_on" => date('Y-m-d H:i:s'),
                    "search_filters" => $cat_search_filters, "category_id" => $this->user_model->get_transaction_code()
                );
                $insert = $this->user_model->update("lucy_category_description",$category_details);

                if ($insert) {
                    $this->data["message"] = "Successfully updated the category";
                } else
                    $this->data['error'] = "Unable to update the category. Please, check your details.";
            } else
                $this->data['error'] = $error;
        }
        $this->smarty->view('admin/product/category/edit/edit.tpl', $this->data);

    }

}
