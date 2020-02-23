<?php 

class Pesan_model extends CI_Model {
   public function getAllPesan(){
      $this->db->select('*');
      $this->db->from('pesan');
      $this->db->order_by('id', 'DESC');
      return $this->db->get()->result_array();
   }

   public function addPesan($arr){
      $this->db->insert('pesan', $arr);
   }

   public function detail_pesan($id){
      $this->db->select('*');
      $this->db->from('pesan');
      $this->db->where('id', $id);

      return $this->db->get()->row_array();
   }
}