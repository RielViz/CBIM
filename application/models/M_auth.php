<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

   
    public function authenticate_user($username, $password)
    {
        
        $this->db->where('username', $username);
        $this->db->where('password', $password); 

        $query = $this->db->get('auth');

        if ($query->num_rows() == 1) {
            return $query->row_array(); 
        } else {
            return false;
        }
    }

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }
}