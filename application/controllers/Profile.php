<?php 

class Profile extends CI_Controller {
   
   public function __construct(){
      parent::__construct();
      $this->load->model('Profile_model', 'p');
   }

   public function index(){
      $data['profile'] = $this->p->getProfile();
      
      $skill = $this->p->getAllSkill();
      $count = count($skill);
      if($count%2 == 1){
         $count = ($count/2) + 1;
      }else{
         $count = $count/2;
      }
      $skill = array_chunk($skill, $count);
      $data['skill'] = $skill;
      
      $data['kerja'] = $this->p->getPengalamanKerja();
      $data['pendidikan'] = $this->p->getPendidikan();
      $data['service'] = $this->p->getService();
      // echo '<pre>';
      // print_r($data['service']);
      // echo '</pre>';

      $this->load->view('template/header');
      $this->load->view('profile/index', $data);
      $this->load->view('template/footer');
   }
}