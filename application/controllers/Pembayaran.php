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
	$this->load->model('m_pasien');
  }

    function index()
    {
        //$this->load->helper('url');
		$id = $this->session->userdata("id");
		$dataPegawai = $this->m_pegawai->data_pegawai($id);
       $this->load->view('pegawai/pembayaran.php', array(
         'dataPegawai' => $dataPegawai
       ));
        //$this->load->view('pegawai/pembayaran.php');
    }

    public function tampilPegawai($id){
      $dataPegawai = $this->m_pegawai->tampil_data($id);
       $this->load->view('pegawai/pembayaran.php', array(
         'dataPegawai' => $dataPegawai
       ));
    }
	
	public function tampilPasien(){
		$id = $this->session->userdata("id");
		$dataPegawai = $this->m_pegawai->data_pegawai($id);
		$kdPasien = $this->input->post('kd_pasien');
      $dataPasien = $this->m_pasien->pembayaran_pasien($kdPasien);
	  if($dataPasien->num_rows() > 0){
		  $this->load->view('pegawai/pembayaran.php', array(
         'dataPasien' => $dataPasien,
		 'dataPegawai' => $dataPegawai
       ));
	  }else{
		  $message = "Maaf, tidak ada data pasien dengan kode pasien " . $kdPasien;
			 echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('index.php/pegawai', 'refresh');
	  }       
    }
	
	public function tambahPembayaran(){
		$tanggal = date("Y-m-d");
		$jenisPembayaran = $this->input->post('jenis_pembayaran');
		$tujuan = $this->input->post('ket_pembayaran');
		$total = $this->input->post('total_bayar');
		$metodePembayaran = $this->input->post('metode_pembayaran');
		$idPegawai = $this->session->userdata("id");
		$kdPasien = $this->input->post('kd_pasien');
		$idPasien = $this->m_pasien->getIdPasien($kdPasien);
		$idRekam = $this->m_pasien->getRekamPasien($idPasien);
		if($jenisPembayaran == 1){
			
		}else if($jenisPembayaran == 2){
			
		}else if($jenisPembayaran == 3){
			
		}
		$data = array(
			'tanggal'  => $tanggal,
			'id_jenis_pembayaran' => $jenisPembayaran,
			'tujuan' => $tujuan,
			'total' => $total,
			'id_metode_pembayaran' => $metodePembayaran,
			'id_pegawai' => $idPegawai,
			'id_rekam_medik' => $idRekam
		);
		$this->m_pasien->tambahPembayaranPasien($data,'tb_pembayaran');
		redirect(base_url('index.php/pegawai'));
	}
}
?>
