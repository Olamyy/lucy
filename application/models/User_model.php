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
            return $this->get('lucy_cart');
        } else
            return false;
    }

    public function get($table){
        $query = $this->db->get($table);  // Produces: SELECT * FROM mytable
        if ($query){
            return $query->result();
        }
        else
            return false;
    }

    public function auto_logout($field)
    {
        $t = time();
        $new_time = $_SESSION[$field]['time'];
        $diff = $t - $new_time;
        if ($diff > 500 || !isset($new_time))
        {
            return true;
        }
        else
        {
            $_SESSION[$field] = time();
        }
    }


    public function update($data, $table, $condition)
    {
        $state = $this->db->update($table, $data, $condition);
        if ($state) {
            return $this->custom_get($table, array(), 0, 0);
        } else
            return false;

    }

    public function custom_get($table,$condition, $limit, $clause){
        $query = $this->db->get_where($table,$condition, $limit, $clause);
        if ($query){
            return $query->result($type='array');
        }
        else
            return false;
    }

    public function delete_data($table,$condition){
        $query = $this->db->delete($table, $condition);  // Produces: // DELETE FROM mytable  // WHERE id = $id
        if ($query){
            return $query;
        }
        else
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


    public function get_transaction_code($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $random_string_length = $length;
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
