<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
//This model make preference global on every part of the application
//Ojbect is made global and also its Smarty equivalance..
*/

class Preference extends CI_Model {
	
	function __construct(){
		parent::__construct();
		//loop to create all necessary configuration from db...
		if($this->config->item('user-db-config')){
			$config = $this->db->get(Options::$_settings)->result();
			foreach($config as $config_data){
				$this->config->set_item(strtolower($config_data->label), $config_data->value);
				$this->smarty->assign(strtoupper($config_data->label),$config_data->value);
			}

		}
		
		foreach($this->config->config as $key=>$val){
			 $this->smarty->assign(strtoupper($key),$val);
		}
		
		if ($this->agent->is_referral()){
			$this->config->set_item('referring_url',$this->agent->referrer());
			$this->smarty->assign('REFERRING_URL',$this->agent->referrer());
		}
		$this->smarty->assign('CURRENT_PAGE',$this->router->fetch_class());
        $this->smarty->assign('CURRENT_ACTION',$this->router->fetch_method());
	}

}