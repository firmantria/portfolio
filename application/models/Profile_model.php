<?php 

class Profile_model extends CI_Model {
   public function getProfile(){
      return $this->db->get('user')->row_array();
   }

   public function getAllSkill(){
      return $this->db->get('skill')->result_array();
   }
   
   public function getPengalamanKerja(){
      return $this->db->get('pengalaman_kerja')->result_array();
   }
   
   public function getPendidikan(){
      return $this->db->get('pendidikan')->result_array();
   }
   
   public function getService(){
      return $this->db->get('service')->result_array();
   }
}