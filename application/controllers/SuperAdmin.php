<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class SuperAdmin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_manager');
    }

    function index()
    {
        $this->load->helper('url');
        $this->load->view('super/home.php');
    }

    function tampilLaporan()
    {
        $this->load->helper('url');
        $this->load->view('super/laporan.php');
    }

    public function tampilDataManager(){
      $dataManager = $this->m_manager->tampil_manager();
      $this->load->view('super/data-manager.php', array(
        'dataManager' => $dataManager
     ));
    }

    public function tambahManager()
  	{
  		$this->load->helper('url');
  		$this->load->view('super/tambah-manager.php');
  	}

  	public function actionTambahManager(){
  		$this->load->library('upload');
  		$idPegawai = $this->input->post('id');
  		$nik = $this->input->post('nik');
  		$namaManager = $this->input->post('namaManager');
  		$noHpManager = $this->input->post('noHP');
  		$alamat = $this->input->post('alamat');
  		$namaFile = $namaManager+$noHpManager;
  		$config['upload_path'] = './asset/foto_manager/';
  		$config['allowed_types'] = 'jpg|png|jpeg';
  		$config['max_size'] = '2048'; //maksimum besar file 2M
          $config['max_width']  = '1288'; //lebar maksimum 1288 px
          $config['max_height']  = '1288'; //tinggi maksimu 1288 px
          $config['file_name'] = $namaFile; //nama yang terupload nantinya
  		$idUserPeg = $this->input->post('idUserPeg');


  		$this->upload->initialize($config);

  		if($this->upload->do_upload('fotoManager')){
  			$gbr = $this->upload->data();
  			$data = array(
  				'id' => $idPegawai,
  				'nik' => $nik,
  				'nama' => $namaPegawai,
  				'no_hp' => $noHP,
  				'alamat' => $alamat,
  				'foto' => $gbr['file_name']
  			);
  			$this->m_manager->actionTambahManager($data,'tb_manager');
  			redirect(base_url('index.php/SuperAdmin/tampilDataManager'), 'refresh');
  		}else{
  			//echo "<script type='text/javascript'>alert('Upload Failed!!');</script>";
  			//redirect(base_url('index.php/tambahpasien'), 'refresh');
  			$error = array('error' => $this->upload->display_errors());
  			echo $error['error'];
  		}
  	}

    public function tampilDetailManager($id){
      $dataManager = $this->m_manager->get_manager($id);
       $this->load->view('super/profile-manager.php', array(
         'dataManager' => $dataManager
       ));
      //$this->load->view('pegawai/rekam-medik.php',$medik);
    }

}
?>
