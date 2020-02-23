<?php 

class PengalamanKerja extends CI_Controller {

   public function __construct(){
      parent::__construct();
      $this->load->model('PengalamanKerja_model', 'pkm');
      if($this->session->userdata('logged_in') !== TRUE){
         redirect(base_url('login'));
      }else{
         $this->data['user'] = $this->session->userdata('nama');
      }
   }

   public function index(){
      $data['kerja'] = $this->pkm->getAllPengalamanKerja();
      $this->load->view('template/header_admin', $this->data);
      $this->load->view('pengalaman-kerja/index', $data);
      $this->load->view('template/footer_admin');
   }

   public function get_by_id(){
      $id = $this->input->post('id');
      $data = $this->pkm->getPengalamanKerjaById(base64_decode($id));

      echo json_encode($data);
   }

   public function add(){
      $nama = $this->input->post('nama');
      $dari = $this->input->post('dari');
      $sampai = $this->input->post('sampai');
      $tempat = $this->input->post('tempat');
      $kota = $this->input->post('kota');
      $deskripsi = $this->input->post('deskripsi');

      $arr = [
         'nama' => $nama,
         'tgl_dari' => $dari,
         'tgl_sampai' => $sampai,
         'tempat' => $tempat,
         'kota' => $kota,
         'deskripsi' => $deskripsi,
      ];
      $this->pkm->addPengalamanKerja($arr);

      redirect(base_url('pengalaman-kerja'));
   }

   public function update(){
      $id = $this->input->post('id');
      $nama = $this->input->post('nama');
      $dari = $this->input->post('dari');
      $sampai = $this->input->post('sampai');
      $tempat = $this->input->post('tempat');
      $kota = $this->input->post('kota');
      $deskripsi = $this->input->post('deskripsi');
      
      $arr = [
         'nama' => $nama,
         'tgl_dari' => $dari,
         'tgl_sampai' => $sampai,
         'tempat' => $tempat,
         'kota' => $kota,
         'deskripsi' => $deskripsi,
      ];
      $this->pkm->ubahPengalamanKerja($arr, $id);

      redirect(base_url('pengalaman-kerja'));
   }

   public function delete(){
      $id = $this->input->post('id');
      $arr = [
         'id' => base64_decode($id)
      ];

      $this->pkm->deletePengalamanKerja($arr);

      redirect(base_url('pengalaman-kerja'));
   }
}