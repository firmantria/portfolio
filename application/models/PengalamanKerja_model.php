<?php 

class PengalamanKerja_model extends CI_Model {
   public function getAllPengalamanKerja(){
      return $this->db->get('pengalaman_kerja')->result_array();
   }
   
   public function getPengalamanKerjaById($id){
      $this->db->select('*');
      $this->db->from('pengalaman_kerja');
      $this->db->where('id', $id);

      $result = $this->db->get();

      return $result->row_array();
   }
   
   public function addPengalamanKerja($arr){
      $this->db->insert('pengalaman_kerja', $arr);
   }

   public function ubahPengalamanKerja($data, $id){
      $this->db->where('id', $id);
      $this->db->update('pengalaman_kerja', $data);
   }

   public function deletePengalamanKerja($data){
      $this->db->delete('pengalaman_kerja', $data);
   }
}