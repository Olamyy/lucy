<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Smarty Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Smarty
 * @author		Oluwasegun Matthew
 */
//require_once( BASEPATH.'libraries/Smarty/libs/Smarty.class.php' );

require_once(BASEPATH.'../vendor/autoload.php');


class CI_Smarty extends Smarty {

	function __construct()
	{
		parent::__construct();
		$ci =& get_instance();

		$temp_location =  $ci->config->item('smarty_view_folder');
		$cach_location = $temp_location."/_cache";
		$this->compile_dir = $cach_location;
		$this->template_dir = $temp_location;
		$this->assign( 'THEME_PATH', $temp_location);


		// Assign CodeIgniter object by reference to CI
		if ( method_exists( $this, 'assignByRef') )
		{
			$this->assignByRef("ci", $ci);
		}

		log_message('debug', "Smarty Class Initialized");
	}

	/**
	 *  Parse a template using the Smarty engine
	 *
	 * This is a convenience method that combines assign() and
	 * display() into one step.
	 *
	 * Values to assign are passed in an associative array of
	 * name => value pairs.
	 *
	 * If the output is to be returned as a string to the caller
	 * instead of being output, pass true as the third parameter.
	 *
	 * @access	public
	 * @param	string
	 * @param	array
	 * @param	bool
	 * @return	string
	 */
	function view($template, $data = array(), $return = FALSE)
	{
		foreach ($data as $key => $val)
		{
			$this->assign($key, $val);
		}

		if ($return == FALSE)
		{
			$CI =& get_instance();
			if (method_exists( $CI->output, 'set_output' ))
			{
				$CI->output->set_output( $this->fetch($template) );
			}
			else
			{
				$CI->output->final_output = $this->fetch($template);
			}
			return;
		}
		else
		{
			return $this->fetch($template);
		}
	}
}
// END Smarty Class
