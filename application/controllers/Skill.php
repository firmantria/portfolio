<?php 
class Skill extends CI_Controller {
   public function __construct(){
      parent::__construct();
      $this->load->model('Skill_model', 'sm');
      if($this->session->userdata('logged_in') !== TRUE){
         redirect(base_url('login'));
      }else{
         $this->data['user'] = $this->session->userdata('nama');
      }
   }

   public function index(){
      $this->data['skill'] = $this->sm->getAllSkill();

      $this->load->view('template/header_admin', $this->data);
      $this->load->view('skill/index', $this->data);
      $this->load->view('template/footer_admin');
   }

   public function add(){
      $nama = $this->input->post('nama');

      if($nama == ''){
         redirect(base_url('skill'));
      }else{
         $arr = [
            'nama' => $nama
         ];
         $this->sm->addSkill($arr);

         redirect(base_url('skill'));
      }
   }

   public function update(){
      $id = $this->input->post('id');
      $nama = $this->input->post('nama');
      $arr = [
         'nama' => $nama
      ];
      if($nama == ''){
         redirect(base_url('skill'));
      }else{
         $this->sm->ubahSkill($arr, base64_decode($id));
         redirect(base_url('skill'));
      }
   }

   public function delete(){
      $id =$this->input->post('id');
      $arr = [
         'id' => base64_decode($id)
      ];

      $this->sm->deleteSkill($arr);

      redirect(base_url('skill'));
   }
}