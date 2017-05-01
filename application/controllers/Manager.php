<?php
(defined('BASEPATH') OR exit('No direct script access allowed'));

class Manager extends CI_Controller {

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
		if(!$this->session->userdata('username') && $this->session->userdata('status') == 0){
			redirect(base_url());
		}
		$this->load->model('m_pegawai');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('manager/home.php');
	}

	//menampilkan halaman laporan
	function viewLaporan(){
		$this->load->helper('url');
		$this->load->view('manager/laporan.php');
	}

	//menampilkan halaman data pegawai
	function viewDataPegawai(){
		$dataPegawai['listPegawai'] = $this->m_pegawai->tampil_pegawai(); //ambil data pasien yang di simpan didalam listPasien
		$this->load->helper('url');
		$this->load->view('manager/data-pegawai.php',$dataPegawai);
	}

	//menampilkan halaman tambah pegawai
	function viewTambahPegawai(){
		$this->load->helper('url');
		$this->load->view('manager/tambah-pegawai.php');
	}

	// action tambah pegawai
	public function actionTambahPegawai(){
		$this->load->library('upload');
		$idPegawai = $this->input->post('id');
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

	//menampilkan halaman detail pegawai
	function viewDetailPegawai($id){
		$dataPegawai = $this->m_pegawai->getPegawai($id);
		 $this->load->view('manager/detail-pegawai.php', array(
			 'dataPegawai' => $dataPegawai
		 ));
	}

	//action update pegawai
	function actionUpdatePegawai(){

	}

	//menampilkan halaman profile pegawai
	public function viewProfileManager($username){
		$profilePegawai = $this->m_pegawai->tampil_profile_pegawai($username);
		$lokasiAll = $this->m_pegawai->allLokasi();
		 $this->load->view('manager/profile.php', array(
			 'profilePegawai' => $profilePegawai,
			 'lokasiAll' => $lokasiAll,

		 ));
	}

}
