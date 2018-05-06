<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    
   public function add_user($newuser)
    {
        $query = "INSERT INTO users_temp
                              (fname, lname, paswword, email, updated_at, created_at)
                              VALUES (?,?,?,?,?,?)";

       return $this->db->query($query, $newuser);

   }
    public function get_user_by_email($checkemail)
    {
        return $this->db->query("SELECT * FROM users_temp WHERE email = ?", array($checkemail))->row_array();
    }
}


?>

