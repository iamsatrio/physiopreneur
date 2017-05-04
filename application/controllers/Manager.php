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
		$this->load->model('m_manager');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('manager/home.php');
	}

	//menampilkan halaman laporan
	function viewLaporan(){
		$this->load->helper('url');
		$dataLaporanPerMinggu = $this->m_manager->showLaporanManagerPerMinggu();
		$dataLaporanPerBulan = $this->m_manager->showLaporanManagerPerBulan();
		$dataLaporanPerTahun = $this->m_manager->showLaporanManagerPerTahun();		
		$this->load->view('manager/laporan.php', array(
			'dataLaporanPerMinggu' => $dataLaporanPerMinggu,
			'dataLaporanPerBulan' => $dataLaporanPerBulan,
			'dataLaporanPerTahun' =>$dataLaporanPerTahun
		));
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
		$idLokasi = $this->session->userdata("lokasi_id");
		$randomNumb = rand(10,100);
		$timeNow = substr(time(),7);
		$generateID = "BDO-" . $randomNumb . $timeNow;
		$dataLokasi = $this->m_manager->getLokasi();
		$this->load->view('manager/tambah-pegawai.php',array(
			'dataLokasi' => $dataLokasi,
			'genNikPegawai' => $generateID
		));
	}

	// action tambah pegawai
	public function actionTambahPegawai(){
		$this->load->library('upload');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$confPassword = $this->input->post('confirm_password');
		$nik = $this->input->post('nik');
		$namaPegawai = $this->input->post('namaPegawai');
		$noHpPegawai = $this->input->post('noHP');
		$alamat = $this->input->post('alamat');
		$idLokasiPeg = $this->input->post('idLokasi');
		$namaFile = $namaPegawai.$noHpPegawai;
		$config['upload_path'] = './asset/foto_pegawai/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '1288'; //tinggi maksimu 1288 px
        $config['file_name'] = $namaFile; //nama yang terupload nantinya
		
		if($password == $confPassword){
			$dataAkun = array(
				'username' => $username,
				'password' => $password,
				'id_role' => 2
			);
			$this->m_manager->tambahAkunPegawai($dataAkun,'tb_user');
			
			$idUserPeg = $this->m_manager->getMaxIdUser();
		
			$this->upload->initialize($config);

			if($this->upload->do_upload('fotoPegawai')){
				$gbr = $this->upload->data();
				$data = array(
					'nik' => $nik,
					'nama' => $namaPegawai,
					'no_hp' => $noHpPegawai,
					'alamat' => $alamat,
					'id_lokasi' => $idLokasiPeg,
					'foto' => $gbr['file_name'],
					'id_user' => $idUserPeg
				);
				$this->m_pegawai->tambah_pegawai($data,'tb_pegawai');
				redirect(base_url('index.php/manager/viewDataPegawai'), 'refresh');
			}else{
				//echo "<script type='text/javascript'>alert('Upload Failed!!');</script>";
				//redirect(base_url('index.php/tambahpasien'), 'refresh');
				$error = array('error' => $this->upload->display_errors());
				echo $error['error'];
			}
		}else{
			$message = "Password tidak sesuai. Check Again!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect(base_url('index.php/manager/viewTambahPegawai'),'refresh');
		}
		
		
	}

	//menampilkan halaman detail pegawai
	function viewDetailPegawai($nik){
		$dataPegawai = $this->m_pegawai->getPegawai($nik);
		 $this->load->view('manager/detail-pegawai.php', array(
			 'dataPegawai' => $dataPegawai
		 ));
	}

	//action update pegawai
	function actionUpdatePegawai(){
		
	}
	
	//action update profile Manager
	function actionUpdateProfile(){
		$this->load->library('upload');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$confPassword = $this->input->post('confirm_password');
		$nik = $this->input->post('nik');
		$namaPegawai = $this->input->post('namaPegawai');
		$noHpPegawai = $this->input->post('noHP');
		$alamat = $this->input->post('alamat');
		$idLokasiPeg = $this->input->post('idLokasi');
		$namaFile = $namaPegawai.$noHpPegawai;
		$config['upload_path'] = './asset/foto_manager/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '1288'; //tinggi maksimu 1288 px
        $config['file_name'] = $namaFile; //nama yang terupload nantinya
		
		if($password == $confPassword){
			$dataAkun = array(
				'username' => $username,
				'password' => $password
			);
			$condition['id'] = $this->session->userdata('id');
			$this->m_manager->updateAkunPegawai($dataAkun,$condition);
						
			$this->upload->initialize($config);

			if($this->upload->do_upload('fotoPegawai')){
				$gbr = $this->upload->data();
				$data = array(
					'nik' => $nik,
					'nama' => $namaPegawai,
					'no_hp' => $noHpPegawai,
					'alamat' => $alamat,
					'id_lokasi' => $idLokasiPeg,
					'foto' => $gbr['file_name']
				);
				$this->m_manager->update_pegawai($data,$condition);
				redirect(base_url('index.php/manager'), 'refresh');
			}else{
				$data = array(
					'nik' => $nik,
					'nama' => $namaPegawai,
					'no_hp' => $noHpPegawai,
					'alamat' => $alamat,
					'id_lokasi' => $idLokasiPeg
				);
				$this->m_manager->update_pegawai($data,$condition);
				redirect(base_url('index.php/manager'), 'refresh');				
			}
		}else{
			$message = "Password tidak sesuai. Check Again!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$user = $this->session->userdata('username');
			redirect(base_url('index.php/manager/viewProfileManager/'.$user),'refresh');
		}
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
	
	//search pegawai
	public function viewPegawaiById(){
		$searchNIK = $this->input->post('nik');
		$dataPegawai = $this->m_pegawai->getPegawai($searchNIK);
		if($dataPegawai->num_rows() > 0){
			$this->load->view('manager/detail-pegawai.php', array(
				'dataPegawai' => $dataPegawai
			));
		}else{
			$message = "Pegawai dengan NIK ".$searchNIK." tidak ditemukan";
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect(base_url('index.php/manager/'),'refresh');
		}		
	}
}
