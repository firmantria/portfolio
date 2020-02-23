<?php 

class Admin extends CI_Controller {
   
   var $data;

   public function __construct(){
      parent::__construct();
      $this->load->model('Admin_model', 'adm');
      if($this->session->userdata('logged_in') !== TRUE){
         redirect(base_url('login'));
      }else{
         $this->data['user'] = $this->session->userdata('nama');
      }
   }

   public function index(){
      $this->load->view('template/header_admin', $this->data);
      $this->load->view('admin/index');
      $this->load->view('template/footer_admin');
   }
}