<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahPegawai extends CI_Controller {

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
		$this->load->model('M_pegawai');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('manager/tambah-pegawai.php');
	}

	public function tambah_pegawai(){
		$this->load->library('upload');
		$idPegawai = $this->input->post('id')
		$nik = $this->input->post('nik');
		$namaPegawai = $this->input->post('namaPegawai');
		$noHpPegawai = $this->input->post('noHp');
		$alamat = $this->input->post('alamat');
		$idLokasiPeg = $this->input->post('lokasiPeg');
		$namaFile = $namaPasien+$noHP;
		$config['upload_path'] = './asset/foto_pasien/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '1288'; //tinggi maksimu 1288 px
        $config['file_name'] = $namaFile; //nama yang terupload nantinya
		$idUserPeg = $this->input->post('idUserPeg');
		
					
		$this->upload->initialize($config);
							
		if($this->upload->do_upload('fotoPegawai')){
			$gbr = $this->upload->data();			
			$data = array(
				'id' => $idPegawai,
				'nik' => $nik,
				'nama' => $namaPegawai,
				'no_hp' => $noHP,
				'alamat' => $alamat,
				'id_lokasi' => $idLokasiPeg,
				'foto' => $gbr['file_name']
			);
			$this->m_pegawai->tambah_pegawai($data,'tb_pegawai');
			redirect(base_url('index.php/tambahpasien/rekam_medik'), 'refresh');
		}else{			
			//echo "<script type='text/javascript'>alert('Upload Failed!!');</script>";			
			//redirect(base_url('index.php/tambahpasien'), 'refresh');
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}	
	}
}
