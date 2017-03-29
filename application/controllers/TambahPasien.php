<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahPasien extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pasien');
		$this->load->model('m_rekam');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->helper('url');		
		$this->load->view('pegawai/tambah-pasien.php');
	}
	
	public function tambah_pasien(){		
		$this->load->library('upload');
		$tipePas = $this->input->post('tipe');
		$idPasien = $this->input->post('idPasien');
		$namaPasien = $this->input->post('namaPasien');
		$tglLahir = $this->input->post('tglLahir');
		$alamat = $this->input->post('alamat');
		$noHP = $this->input->post('noHP');
		$namaFile = $namaPasien+$noHP;
		$config['upload_path'] = './asset/foto_pasien/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '1288'; //tinggi maksimu 1288 px
        $config['file_name'] = $namaFile; //nama yang terupload nantinya
					
		$this->upload->initialize($config);
							
		if($this->upload->do_upload('fotoPasien')){
			$gbr = $this->upload->data();			
			$data = array(
				'id' => $idPasien,
				'id_jenis_pasien' => $tipePas,
				'nama_pasien' => $namaPasien,
				'tanggal_lahir' => $tglLahir,
				'no_hp' => $noHP,
				'alamat' => $alamat,
				'foto' => $gbr['file_name']
			);
			$this->m_pasien->tambah_data($data,'tb_pasien');
			redirect(base_url('index.php/tambahpasien/rekam_medik'), 'refresh');
		}else{			
			//echo "<script type='text/javascript'>alert('Upload Failed!!');</script>";			
			//redirect(base_url('index.php/tambahpasien'), 'refresh');
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}	
	}
	
	/*public function tambah_pasien(){
		$tipePas = $this->input->post('tipe');
		$idPasien = $this->input->post('idPasien');
		$namaPasien = $this->input->post('namaPasien');
		$tglLahir = $this->input->post('tglLahir');
		$alamat = $this->input->post('alamat');
		$noHP = $this->input->post('noHP');
		$data = array(
			'id' => $idPasien,
			'id_jenis_pasien'  => $tipePas,
			'nama_pasien' => $namaPasien,
			'tanggal_lahir' => $tglLahir,
			'no_hp' => $noHP,
			'alamat' => $alamat
		);
		$this->m_pasien->tambah_data($data,'tb_pasien');
		redirect(base_url('index.php/tambahpasien/rekam_medik'));
	}*/
		
	public function rekam_medik(){
		$idMax = $this->m_pasien->max_id();
		$rekamMedik = $this->m_rekam->tampil_id_pasien($idMax);
		$medik = $this->m_rekam->tampil_rekam($idMax);
		$this->load->view('pegawai/rekam-medik.php', array(
         'rekamMedik' => $rekamMedik,
         'medik' => $medik
       ));
	}

}
