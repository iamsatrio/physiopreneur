<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class Pembayaran extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('username') && $this->session->userdata('status') == 0){
      redirect(base_url());
    }
    $this->load->model('m_pegawai');
  }

    function index()
    {
        $this->load->helper('url');
        $this->load->view('pegawai/pembayaran.php');
    }

    public function tampilPegawai($id){
      $dataPegawai = $this->m_pegawai->tampil_data($id);
       $this->load->view('pegawai/pembayaran.php', array(
         'dataPegawai' => $dataPegawai
       ));
    }
}
?>
