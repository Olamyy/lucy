<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Controller extends CI_Controller{

	public $admin;
	public $synced_target_count;

	public function __construct(){
		parent::__construct();

		$this->admin = $this->session->userdata('admin-user');
		$this->smarty->assign('admin', $this->admin);
		if (empty($this->admin))
			redirect('admin/login/');

		$this->smarty->assign('synced_target', $this->synced_target_count);
	}

	public function set_paginator($base_url, $total_row, $segment){
		$this->load->library('pagination');
		$p_config["base_url"] = base_url() . $base_url;
		$p_config["total_rows"] = $total_row;
		$p_config["per_page"] = $this->config->item('paginator'); //you can change this value....
		$p_config["uri_segment"] = $segment;
		$p_config['num_links'] = 3;
		//$p_config['use_page_numbers'] = TRUE;
		$p_config['full_tag_open'] = '<ul class="pagination">';
		$p_config['full_tag_close'] = '</ul>';
		$p_config['first_tag_open'] = '<li class="page-item prev">';
		$p_config['first_tag_close'] = '</li>';
		$p_config['last_tag_open'] = '<li class="page-item next">';
		$p_config['last_tag_close'] = '</li>';
		$p_config['num_tag_open'] = '<li class="page-item">';
		$p_config['num_tag_close'] = '</li>';
		$p_config['prev_tag_open'] = '<li class="page-item">';
		$p_config['prev_tag_close'] = '</li>';
		$p_config['next_tag_open'] = '<li>';
		$p_config['next_tag_close'] = '</li>';
		$p_config['cur_tag_open'] = '<li class="active"><a href="#" class="page-link">';
		$p_config['cur_tag_close'] = '</a></li>';
		$p_config['next_link'] = 'Next';
		$p_config['prev_link'] = 'Previous';

		$this->pagination->initialize($p_config);
		$data['page'] = ($this->uri->segment($segment)) ? $this->uri->segment($segment) : 0;
		$data['links'] = $this->pagination->create_links();
		$data['cur_page'] = $this->pagination->cur_page;

		$data['total_page'] = ceil(($total_row / $this->pagination->per_page));
		$data['page_message'] =  ceil(($total_row / $this->pagination->per_page)) . ' results per page';

		return $data;
	}
}



class Auth_User_Controller extends CI_Controller{

	public $user;
	public $synced_target_count;

	public function __construct(){
		parent::__construct();

		$this->load->model('user_model');

		$user_id = $this->session->userdata('user-profile');
		if($user_id){
			$profile = $this->user_model->get(array('_id'=>new MongoDB\BSON\ObjectId($user_id)));
			if(!empty($profile)) {
				$this->user = $profile;
				$this->smarty->assign('user', $profile);
			}else
				redirect('welcome/');
		}else
			redirect('welcome/');
	}

	public function set_paginator($base_url, $total_row, $segment){
		$this->load->library('pagination');
		$p_config["base_url"] = base_url() . $base_url;
		$p_config["total_rows"] = $total_row;
		$p_config["per_page"] = $this->config->item('paginator'); //you can change this value....
		$p_config["uri_segment"] = $segment;
		$p_config['num_links'] = 3;
		//$p_config['use_page_numbers'] = TRUE;
		$p_config['full_tag_open'] = '<ul class="pagination">';
		$p_config['full_tag_close'] = '</ul>';
		$p_config['first_tag_open'] = '<li class="prev">';
		$p_config['first_tag_close'] = '</li>';
		$p_config['last_tag_open'] = '<li class="next">';
		$p_config['last_tag_close'] = '</li>';
		$p_config['num_tag_open'] = '<li>';
		$p_config['num_tag_close'] = '</li>';
		$p_config['prev_tag_open'] = '<li>';
		$p_config['prev_tag_close'] = '</li>';
		$p_config['next_tag_open'] = '<li>';
		$p_config['next_tag_close'] = '</li>';
		$p_config['cur_tag_open'] = '<li class="active"><a href="#">';
		$p_config['cur_tag_close'] = '</a></li>';
		$p_config['next_link'] = 'Next';
		$p_config['prev_link'] = 'Previous';

		$this->pagination->initialize($p_config);
		$data['page'] = ($this->uri->segment($segment)) ? $this->uri->segment($segment) : 0;
		$data['links'] = $this->pagination->create_links();
		$data['cur_page'] = $this->pagination->cur_page;

		$data['total_page'] = ceil(($total_row / $this->pagination->per_page));
		$data['page_message'] = 'Currently viewing page ' . ceil(($total_row / $this->pagination->per_page)) . ' results';

		return $data;
	}
}
