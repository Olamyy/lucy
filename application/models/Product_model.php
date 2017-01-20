<?php
/**
 * Created by PhpStorm.
 * User: lekanterragon
 * Date: 1/17/17
 * Time: 2:06 PM
 */

class Product_model extends CI_Model
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

    public function get($table, $limit, $clause){
        $query = $this->db->get($table, $limit, $clause);
        if ($query){
            return $query->result($type='array');
        }
        else
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


    public function custom_query($query)
    {
        $state = $this->db->query($query);
        if ($state) {
            return $state->result_array();
        } else
            return false;
    }


    public function code_generator()
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

}