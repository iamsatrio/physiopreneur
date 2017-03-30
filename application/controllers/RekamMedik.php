<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class RekamMedik extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_rekam');
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
    
    public function index()
    {
        //$this->load->helper('url');
        //$this->load->view('pegawai/rekam-medik.php', $rekamMedik);
		$searchKodePasien = $this->input->post('kd_pasien');
		if($searchKodePasien == ''){
			$idPasien = $this->session->userdata("idPasienTambahRekam");		
			$rekamMedik = $this->m_rekam->tampil_id_pasien($idPasien);
			$medik = $this->m_rekam->tampil_rekam($idPasien);
			$this->load->view('pegawai/rekam-medik.php', array(
				'rekamMedik' => $rekamMedik,
				'medik' => $medik
			));
		}else{
			$idPasien = $this->m_rekam->cari_id($searchKodePasien);
			if($idPasien == ''){
				echo "<script type='text/javascript'>alert('Tidak ada pasien yang dicari');</script>";
				redirect(base_url('index.php/pegawai'),'refresh');
			}else{
				$rekamMedik = $this->m_rekam->tampil_id_pasien($idPasien);
				$medik = $this->m_rekam->tampil_rekam($idPasien);
				$this->load->view('pegawai/rekam-medik.php', array(
					'rekamMedik' => $rekamMedik,
					'medik' => $medik
				));
			}
			
		}		
    }
	
	public function searchRekamMedikPasien(){
		$searchKodePasien = $this->input->post('kd_pasien');
		$rekamMedik = $this->m_rekam->tampil_id_pasien($searchKodePasien);
		$medik = $this->m_rekam->tampil_rekam($searchKodePasien);
		$this->load->view('pegawai/rekam-medik.php', array(
			'rekamMedik' => $rekamMedik,
			'medik' => $medik
		));
	}


}
?>
