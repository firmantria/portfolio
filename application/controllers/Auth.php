<?php 

class Auth extends CI_Controller {

   public function __construct(){
      parent::__construct();
      $this->load->model('Auth_model', 'auth');
   }

   public function index(){
      if($this->session->userdata('logged_in') !== TRUE){
         $this->load->view('template/header_login');
         $this->load->view('auth/index');
         $this->load->view('template/footer_login');
      }else{
         redirect(base_url('cms'));
      }
   }

   public function verify(){
      if($this->session->userdata('logged_in') !== TRUE){
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         if($username == '' || $password == ''){
            redirect(base_url('login'));
         }else{
            $data = $this->auth->login_session($username, $password);

            $session = [
               'username' => $username,
               'nama' => $data['nama'],
               'logged_in' => TRUE
            ];
            $this->session->set_userdata($session);
            
            redirect(base_url('cms'));
         }
      }else{
         redirect(base_url('auth'));
      }
   }

   public function logout(){
      if($this->session->userdata('logged_in') === TRUE){
         $this->session->unset_userdata('username');
         $this->session->unset_userdata('nama');
         $this->session->unset_userdata('logged_in');
         
         redirect(base_url());
      }else{
         redirect(base_url('auth'));
      }
   }
}