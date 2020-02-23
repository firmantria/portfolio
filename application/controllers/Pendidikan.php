<?php 

class Pendidikan extends CI_Controller {

   public function __construct(){
      parent::__construct();
      $this->load->model('Pendidikan_model', 'pm');
      if($this->session->userdata('logged_in') !== TRUE){
         redirect(base_url('login'));
      }else{
         $this->data['user'] = $this->session->userdata('nama');
      }
   }

   public function index(){
      $data['pendidikan'] = $this->pm->getAllPendidikan();
      $this->load->view('template/header_admin', $this->data);
      $this->load->view('pendidikan/index', $data);
      $this->load->view('template/footer_admin');
   }
   
   public function get_by_id(){
      $id = $this->input->post('id');
      $data = $this->pm->getPendidikanById(base64_decode($id));

      echo json_encode($data);
   }

   public function add(){
      $jenjang = $this->input->post('jenjang');
      $tahun_alumni = $this->input->post('tahun-alumni');
      $instansi = $this->input->post('instansi');
      $deskripsi = $this->input->post('deskripsi');

      $arr = [
         'jenjang' => $jenjang,
         'tahun_alumni' => $tahun_alumni,
         'instansi' => $instansi,
         'deskripsi' => $deskripsi,
      ];
      $this->pm->addPendidikan($arr);

      redirect(base_url('riwayat-pendidikan'));
   }

   public function update(){
      $id = $this->input->post('id');
      $jenjang = $this->input->post('jenjang');
      $tahun = $this->input->post('tahun-alumni');
      $instansi = $this->input->post('instansi');
      $deskripsi = $this->input->post('deskripsi');
      
      $arr = [
         'jenjang' => $jenjang,
         'tahun_alumni' => $tahun,
         'instansi' => $instansi,
         'deskripsi' => $deskripsi,
      ];
      $this->pm->ubahPendidikan($arr, $id);

      redirect(base_url('riwayat-pendidikan'));
   }

   public function delete(){
      $id = $this->input->post('id');
      $arr = [
         'id' => base64_decode($id)
      ];

      $this->pm->deletePendidikan($arr);

      redirect(base_url('riwayat-pendidikan'));
   }
}