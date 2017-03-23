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
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->helper('url');
		$this->load->view('pegawai/tambah-pasien.php');
	}

	public function tambah_pasien(){
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
	}

	public function rekam_medik(){
		$idMax = $this->m_pasien->max_id();
		$data['hasil'] = $this->m_pasien->tampil_data($idMax);
		$this->load->view('rekam-medik.php',$data);
	}

}
