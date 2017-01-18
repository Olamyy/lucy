<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function add($table, $data)
    {
        $query = $this->db->insert($data, $table);
        if ($query) {
            return true;
        } else
            return false;
    }


    public function update($data, $table)
    {
        $state = $this->db->replace($data, $table);
        if ($state) {
            return true;
        } else
            return false;

    }


    public function custom_query($query)
    {
        $state = $this->db->query($query);
        if ($state) {
            return $state->result_array();
        } else
            return false;
    }


    public function get_transaction_code()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $random_string_length = 20;
        $string = '';
        $max = strlen($characters) - 1;
        for ($i = 0; $i < $random_string_length; $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }

        return $string;

    }


    public function getCode()
    {
        return mt_rand(1000, 9000);
    }

    public static function msisdn_sanitizer($msisdn, $plus = false)
    {
        $msisdn = trim($msisdn);
        $msisdn = str_replace('+', '', $msisdn);

        if (preg_match('/^234/i', $msisdn) == true) {
            $msisdn = '0' . substr($msisdn, 3);
        }

        if (strlen($msisdn) == 11) {
            $msisdn = '+234' . substr($msisdn, 1);
        } else {
            if (strpos($msisdn, '+') == false)
                $msisdn = '+' . $msisdn;
        }

        if ($plus == false) $msisdn = str_replace('+', '', $msisdn);

        return $msisdn;
    }


}
