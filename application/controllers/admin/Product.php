<?php
/**
 * Created by PhpStorm.
 * Date: 7/6/16
 * Time: 5:11 PM
 */
defined("BASEPATH") OR exit("No direct script access allowed");


class Product extends CI_Controller
{

    private $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
//        $this->load->library("upload");
    }

    public function index(){

        $this->add();
    }


    public function add()
    {
        $error = array();

        if (!empty($_POST)) {
            $name = $this->input->post("product_name");
            $description = $this->input->post("product_description");
            $short_description = $this->input->post("short_description");
            $product_meta_title = $this->input->post("product_meta_title");
            $product_meta_description = $this->input->post("product_meta_description");
            $product_meta_keywords = $this->input->post("product_meta_keywords");
            $product_tags = $this->input->post("product_tags");
            $model = $this->input->post("product_model");
            $isbn = $this->input->post("product_isbn");
            $mpn = $this->input->post("product_mpn");
            $quantity = $this->input->post("product_quantity");
            $price = $this->input->post("product_price");
            $minimum = $this->input->post("product_min_quantity");
            $out_of_store_range = $this->input->post("out_of_stock_range");
            $requires_delivery = $this->input->post("requires_delivery");
            $availability = $this->input->post("availability");
            $manufacturer_name = $this->input->post("manufacturer_name");
            $manufacturer_id = $this->input->post("manufacturer_id");
            $product_categories = $this->input->post("product_categories");
            $product_search_filters = $this->input->post("product_search_filters");
            $related_products = $this->input->post("related_products");
            $position = $this->input->post("primary_product_position");
            $image = $_FILES["product_image"];

            if (empty($name)) $error[] = "Provide valid name for the product";
            if (empty($description)) $error[] = "Provide a description";
            if (empty($product_meta_title)) $error[] = "Provide a Meta Title";
            if (empty($product_meta_description)) $error[] = "Provide a Meta Description";
            if (empty($product_meta_keywords)) $error[] = "Provide search Meta Keywords";
            if (empty($product_tags)) $error[] = "Provide product tags";
            if (empty($model)) $error[] = "Provide product model";
            if (empty($isbn)) $error[] = "Provide product isbn";
            if (empty($mpn)) $error[] = "Provide product mpn";
            if (empty($quantity)) $error[] = "Provide product quantity";
            if (empty($price)) $error[] = "Provide product price";
            if (empty($minimum)) $error[] = "Provide Minimum Order";
            if (empty($out_of_store_range)) $error[] = "Provide out of store range";
            if (empty($requires_delivery)) $error[] = "Provide  delivery status";
            if (empty($availability)) $error[] = "Provide availability status";
            if (empty($manufacturer_name)) $error[] = "Provide manufacturers name";
            if (empty($manufacturer_id)) $error[] = "Provide manufacturers name";
            if (empty($product_categories)) $error[] = "Provide product categories";
            if (empty($product_search_filters)) $error[] = "Provide search filters";
            if (empty($position)) $error[] = "Provide Primary Product Position";
            if (empty($related_products)) $error[] = "Provide related products";
            if (empty($short_description)) $error[] = "Provide a short description";
            if (empty($image)) $error[] = "Provide product image again.";



            if (empty($error)) {
                $image_data = $this->handle_image_upload();
                $product_details = array("name" => $name,
                    "description" => $description,
                    "short_description" => $short_description, "product_meta_title" => $product_meta_title,
                    "product_meta_description" => $product_meta_description, "product_meta_keywords" => $product_meta_keywords,
                    "product_tags" => $product_tags, "model" => $model, "isbn" => $isbn, "mpn" => $mpn,
                    "quantity" => $quantity, "manufacturer_id" => $manufacturer_id, "delivery" => $requires_delivery,
                    "price" => $price, "date_available" => date("Y-m-d H:i:s"), "minimum" => $minimum,
                    "availability" => $availability, "view_count" => 0,
                    "date_added" => date("Y-m-d H:i:s"), "date_modified" => date("Y-m-d H:i:s"),
                    "position" => $position, "search_filters" => $product_search_filters,
                    "out_of_store_range" => $out_of_store_range, "requires_delivery" => $requires_delivery,
                    "manufacturer_name" => $manufacturer_name,
                    "product_categories" => $product_categories, "related_products" => $related_products,
                    "image" => $image_data["file_name"],
                    "product_id" => $this->user_model->get_transaction_code(10)
                );
                $insert = $this->user_model->add("lucy_product", $product_details);

                if ($insert) {
                   $this->data["message"] = "Successfully Created the category";
                }
                else
                    {
                    $this->data["error"] = "Unable to register your details. Please, check your details.";
                    }
            }
            else {
                $this->data["error"] = $error;
                }
        }
        $this->smarty->view("admin/product/add.tpl", $this->data);
    }

    private function handle_image_upload(){
        $image_config = array(
            "upload_path"=>FCPATH. "public/_template/uploads",
            "allowed_types"=>"jpg|png|jpeg",
            "overwrite" => TRUE,
        );

        $this->load->library("upload", $image_config);

        $this->upload->initialize($image_config);

        if (! $this->upload->do_upload("product_image")){
          return $this->upload->display_errors();
        }
        else
            return $this->upload->data();
    }

    public function view(){

        $product_details = $this->user_model->get("lucy_product", 0, 0);
        $this->data["product_details"] = $product_details;

        $error = array();
        if (!empty($_POST)){
            $product_name = $this->input->post("product_name");

            if (empty($product_name)) $error[] = "The field cannot be empty.";

            if (empty($error)){
                $check = $this->user_model->custom_get("lucy_product",
                    array("name" => $product_name), 0, 0);
                if ($check) {
                    $this->data["product_details"] = $check;
                    $this->session->set_userdata("product_details", $check);
                    redirect("index.php/admin/product/edit");
                } else
                    $this->data["error"] = "The product name provided does not exist";
            }
            else
                $this->data["error"] = $error;
        }

        $this->smarty->view("admin/product/view.tpl", $this->data);

    }

    public function edit(){

        $this->data["product_details"] = $this->session->userdata("product_details");

        $error = array();
        if (!empty($_POST)) {
            $name = $this->input->post("product_name");
            $description = $this->input->post("product_description");
            $product_meta_title = $this->input->post("product_meta_title");
            $product_meta_description = $this->input->post("product_meta_description");
            $product_meta_keywords = $this->input->post("product_meta_keywords");
            $product_tags = $this->input->post("product_tags");
            $model = $this->input->post("product_model");
            $isbn = $this->input->post("product_isbn");
            $mpn = $this->input->post("product_mpn");
            $quantity = $this->input->post("product_quantity");
            $price = $this->input->post("product_price");
            $minimum = $this->input->post("product_min_quantity");
            $out_of_store_range = $this->input->post("out_of_stock_range");
            $requires_delivery = $this->input->post("requires_delivery");
            $availability = $this->input->post("availability");
            $manufacturer_name = $this->input->post("manufacturer_name");
            $product_categories = $this->input->post("product_categories");
            $product_search_filters = $this->input->post("product_search_filters");
            $related_products = $this->input->post("related_products");
            $position = $this->input->post("primary_product_position");
            $image = $_FILES["product_image"];

            if (empty($name)) $error[] = "Provide valid name for the product";
            if (empty($description)) $error[] = "Provide a description";
            if (empty($product_meta_title)) $error[] = "Provide a Meta Title";
            if (empty($product_meta_description)) $error[] = "Provide a Meta Description";
            if (empty($product_meta_keywords)) $error[] = "Provide search Meta Keywords";
            if (empty($product_tags)) $error[] = "Provide product tags";
            if (empty($model)) $error[] = "Provide product model";
            if (empty($isbn)) $error[] = "Provide product isbn";
            if (empty($mpn)) $error[] = "Provide product mpn";
            if (empty($quantity)) $error[] = "Provide product quantity";
            if (empty($price)) $error[] = "Provide product price";
            if (empty($minimum)) $error[] = "Provide Minimum Order";
            if (empty($out_of_store_range)) $error[] = "Provide out of store range";
            if (empty($requires_delivery)) $error[] = "Provide  delivery status";
            if (empty($availability)) $error[] = "Provide availability status";
            if (empty($manufacturer_name)) $error[] = "Provide manufacturers name";
            if (empty($product_categories)) $error[] = "Provide product categories";
            if (empty($product_search_filters)) $error[] = "Provide search filters";
            if (empty($position)) $error[] = "Provide Primary Product Position";
            if (empty($related_products)) $error[] = "Provide related products";
            if (empty($image)) $error[] = "Provide product image again.";

            if (empty($error)) {
                $image_data = $this->handle_image_upload($image);

                $product_details = array("name"=>$name, "description"=>$description, "product_meta_title"=>$product_meta_title,
                    "product_meta_description"=>$product_meta_description, "product_meta_keywords"=>$product_meta_keywords,
                    "product_tags"=>$product_tags, "model"=>$model, "isbn"=>$isbn, "mpn"=>$mpn,
                    "quantity"=>$quantity, "manufacturer_id"=>$this->product_model->code_generator(),"delivery"=>$requires_delivery,
                    "price"=>$price, "date_available"=>date("Y-m-d H:i:s"), "minimum"=>$minimum,
                    "availability"=>$availability, "view_count"=>0,
                    "date_added"=>date("Y-m-d H:i:s"), "date_modified"=>date("Y-m-d H:i:s"),
                    "position"=>$position, "search_filters"=>$product_search_filters,
                    "out_of_store_range"=>$out_of_store_range,"requires_delivery"=>$requires_delivery,
                    "manufacturer_name"=>$manufacturer_name,
                    "product_categories"=>$product_categories,"related_products"=>$related_products,
                    "image"=>$image_data["full_path"], "product_id"=>$this->user_model->get_transaction_code(10)
                );
                $update = $this->user_model->update("lucy_product", $product_details);

                if ($update) {
                    $this->data["message"] = "Successfully updated the category";
                } else
                    $this->data["error"] = "Unable to update the product. Please, check your details.";
            } else
                $this->data["error"] = $error;
        }
        $this->smarty->view("admin/product/edit.tpl", $this->data);

    }


}