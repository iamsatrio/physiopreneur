<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class RekamMedik extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_rekam');
    }

    public function index()
    {
        //$this->load->helper('url');
		$idPasien = $this->session->userdata("idPasienTambahRekam");		
		$rekamMedik = $this->m_rekam->tampil_id_pasien($idPasien);
		$medik = $this->m_rekam->tampil_rekam($idPasien);
		$this->load->view('pegawai/rekam-medik.php', array(
         'rekamMedik' => $rekamMedik,
         'medik' => $medik
       ));
        //$this->load->view('pegawai/rekam-medik.php');		
    }

    public function tampilPasien($id){
      $rekamMedik = $this->m_rekam->tampil_id_pasien($id);
      $medik = $this->m_rekam->tampil_rekam($id);
       $this->load->view('pegawai/rekam-medik.php', array(
         'rekamMedik' => $rekamMedik,
         'medik' => $medik
       ));
      //$this->load->view('pegawai/rekam-medik.php',$medik);
    }

}
?>
