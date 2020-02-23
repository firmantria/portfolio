<?php 

class Service extends CI_Controller {
   
   public function __construct(){
      parent::__construct();
      $this->load->model('Service_model', 'srv');
      if($this->session->userdata('logged_in') !== TRUE){
         redirect(base_url('login'));
      }else{
         $this->data['user'] = $this->session->userdata('nama');
      }
   }

   public function index(){
      $data['service'] = $this->srv->getAllService();

      $this->load->view('template/header_admin', $this->data);
      $this->load->view('service/index', $data);
      $this->load->view('template/footer_admin');
   }
   
   public function get_by_id(){
      $id = $this->input->post('id');
      $data = $this->srv->getServiceById(base64_decode($id));

      echo json_encode($data);
   }

   public function add(){
      $judul = $this->input->post('judul');
      $icon = $this->input->post('icon');
      $deskripsi = $this->input->post('deskripsi');

      $arr = [
         'judul' => $judul,
         'icon' => $icon,
         'deskripsi' => $deskripsi,
      ];
      $this->srv->addService($arr);

      redirect(base_url('service'));
   }

   public function update(){
      $id = $this->input->post('id');
      $judul = $this->input->post('judul');
      $icon = $this->input->post('icon');
      $deskripsi = $this->input->post('deskripsi');

      $arr = [
         'judul' => $judul,
         'icon' => $icon,
         'deskripsi' => $deskripsi,
      ];
      
      $this->srv->ubahService($arr, $id);

      redirect(base_url('service'));
   }

   public function delete(){
      $id = $this->input->post('id');
      $arr = [
         'id' => base64_decode($id)
      ];

      $this->srv->deleteService($arr);

      redirect(base_url('service'));
   }
}