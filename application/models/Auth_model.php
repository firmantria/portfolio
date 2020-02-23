<?php 

class Auth_model extends CI_Model {
   public function login_session($username, $password){
      $this->db->select('nama');
      $this->db->from('user');
      $this->db->where('username', $username);
      $this->db->where('password', $password);

      $result = $this->db->get();

      return $result->row_array();
   }
}