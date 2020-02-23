<?php 

class Practice extends CI_Controller {
   
   public function __construct(){
      parent::__construct();
      // $this->load->model('Service_model', 'srv');
      if($this->session->userdata('logged_in') !== TRUE){
         redirect(base_url('login'));
      }else{
         $this->data['user'] = $this->session->userdata('nama');
      }
   }

   public function index(){
      show_404();
   }
}