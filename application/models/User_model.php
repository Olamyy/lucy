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
        $query = $this->db->insert($table, $data);
        if ($query) {
            $insert_id = $this->db->insert_id();
            return $this->custom_get($table,array('id' => $insert_id), 0, 0);
        } else
            return false;
    }

    public function get_cat_details(){
        $cat_from_db = $this->get('lucy_category_description');
        $pre_cart = array();
        foreach($cat_from_db as $data){
            $loop_cat = array('pre_cat'=>explode(",", $data['sub_categories']));
            $loop_cat = array_replace($data, $loop_cat);
            $pre_cart[] = $loop_cat;
        }
        return $pre_cart;
    }


    public function get($table){
        $query = $this->db->get($table);  // Produces: SELECT * FROM mytable
        if ($query){
            return $query->result($type='array');
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
        $this->db->order_by('id', 'RANDOM');
        if ($state) {
            return $this->get($table);
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


    public function get_where_or_where($table, $where, $or_where){
        $query = $this->db->select('*')->from($table)
            ->group_start()
            ->where($where)
            ->or_group_start()
            ->where($or_where)
            ->group_end()
            ->group_end()
            ->get();
        if ($query){
            return $query->result($type='array');
        }
        else
            return false;
    }

    public function get_registry_with_email_or_name($query_term){
        $query = $this->db->select('*')->from('lucy_all_users')
            ->group_start()
            ->where(array('email'=>$query_term))
//            ->or_group_start()
////            ->or_where(array('groom_first_name'=>$query_term))
////            ->or_where(array('groom_last_name'=>$query_term))
////            ->or_where(array('bride_first_name'=>$query_term))
////            ->or_where(array('bride_last_name'=>$query_term))
////            ->or_where(array('name'=>$query_term))
//            ->group_end()
            ->group_end()
            ->get();
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
