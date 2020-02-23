<?php 

class Skill_model extends CI_Model {
   public function getAllSkill(){
      return $this->db->get('skill')->result_array();
   }

   public function addSkill($data){
      $this->db->insert('skill', $data);
   }
   
   public function ubahSkill($data, $id){
      $this->db->where('id', $id);
      $this->db->update('skill', $data);
   }

   public function deleteSkill($data){
      $this->db->delete('skill', $data);
   }
}