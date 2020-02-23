<?php 

class Pendidikan_model extends CI_Model {
   public function getAllPendidikan(){
      return $this->db->get('pendidikan')->result_array();
   }

   public function getPendidikanById($id){
      $this->db->select('*');
      $this->db->from('pendidikan');
      $this->db->where('id', $id);

      $result = $this->db->get();

      return $result->row_array();
   }

   public function addPendidikan($arr){
      $this->db->insert('pendidikan', $arr);
   }

   public function ubahPendidikan($data, $id){
      $this->db->where('id', $id);
      $this->db->update('pendidikan', $data);
   }

   public function deletePendidikan($data){
      $this->db->delete('pendidikan', $data);
   }
}