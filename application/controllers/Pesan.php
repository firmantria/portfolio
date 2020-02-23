<?php 

class Pesan extends CI_Controller {
   
   public function __construct(){
      parent::__construct();
      $this->load->model('Pesan_model', 'psn');
      if($this->session->userdata('logged_in') !== TRUE){
         redirect(base_url('login'));
      }else{
         $this->data['user'] = $this->session->userdata('nama');
      }
   }

   public function index(){
      $this->load->view('template/header_admin', $this->data);
      $this->load->view('pesan/index');
      $this->load->view('template/footer_admin');
   }

   public function add(){
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
      $subject = $this->input->post('subject');
      $message = $this->input->post('message');

      if($nama == '' || $email == '' || $subject == '' || $message == ''){
         echo '0';
      }else{
         $data = [
            'nama' => $nama,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
         ];

         $this->psn->addPesan($data);
         $this->notifEmail($data);

         echo '1';
      }
   }

   public function notifEmail($data){
      $content = '<p>Hi, Firman. Ada pesan baru dari dari website portfoliomu :</p><br>
                  <table border="1" cellpadding="8" cellspacing="0" style="font-family:verdana; font-size:13px; color:#525252;">
                     <thead>
                        <tr>
                              <th>Nama Pengirim</th>
                              <th>Email Pengirim</th>
                              <th>Subjek</th>
                              <th>Pesan</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                              <td>'.$data["nama"].'</td>
                              <td>'.$data["email"].'</td>
                              <td>'.$data["subject"].'</td>
                              <td>'.$data["message"].'</td>
                        </tr>
                     </tbody>
                  </table>';

      $this->load->library('email');

      $this->email->set_newline("\r\n");
      $this->email->set_mailtype("html");
      $this->email->from($data['email'], 'Portfolio Inbox');
      $this->email->to('firmantrianggara@gmail.com');
      $this->email->subject($data['subject']);
      $this->email->message($content);
      $this->email->send();
   }

   public function all_inbox(){
      $pesan = $this->psn->getAllPesan();

      $arr = [];
      for ($i=0; $i < count($pesan); $i++) { 
         $record = [];
         $record['no'] = $i+1;
         $record['id'] = base64_encode($pesan[$i]['id']);
         $record['nama'] = $pesan[$i]['nama'];
         $record['email'] = $pesan[$i]['email'];
         $record['subject'] = $pesan[$i]['subject'];

         $arr[] = $record;
      }

      $data['data'] = $arr;

      echo json_encode($data);
   }

   public function detail_inbox(){
      $id = base64_decode($this->input->post('id'));

      $detail = $this->psn->detail_pesan($id);

      echo json_encode($detail);
   }
}