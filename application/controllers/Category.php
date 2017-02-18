<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 2/4/17
 * Time: 11:53 PM
 */

class Category extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('category_model');

    }

    public function index()
    {
        $cat_id = $this->input->get('cat_id');
        $data = array('category_id'=>$cat_id);
        $category_details = $this->category_model->get('lucy_category_description', 0, 0);
        $pre_cart = array();
        foreach($category_details as $data){
            $loop_cat = array('pre_cat'=>explode(",", $data['sub_categories']));
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }
        $this->data['pre_cart'] = $pre_cart;

        if(!empty($category_details)){
            $this->data['category_details'] = $category_details;
            $this->smarty->view('front/categories.tpl', $this->data);
        }
    }

}

