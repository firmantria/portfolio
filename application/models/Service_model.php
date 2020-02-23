<?php 

class Service_model extends CI_Model {
   public function getAllService(){
      return $this->db->get('service')->result_array();
   }

   public function getServiceById($id){
      $this->db->select('*');
      $this->db->from('service');
      $this->db->where('id', $id);

      $result = $this->db->get();

      return $result->row_array();
   }

   public function addService($arr){
      $this->db->insert('service', $arr);
   }

   public function ubahService($data, $id){
      $this->db->where('id', $id);
      $this->db->update('service', $data);
   }

   public function deleteService($data){
      $this->db->delete('service', $data);
   }
}