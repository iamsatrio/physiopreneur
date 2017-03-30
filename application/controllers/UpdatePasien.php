<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class UpdatePasien extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model("m_pasien");
    }

    public function updatePasienDb()
    {
        $data = array (
            'id' => $this->input->post('idPasien'),
            'id_jenis_pasien'  => $this->input->post('tipe'),
            'nama_pasien' =>$this->input->post('namaPasien'),
            'tanggal_lahir' => $this->input->post('tglLahir'),
            'no_hp' => $this->input->post('noHP'),
            'alamat' =>  $this->input->post('alamat')
        );

        $condition['id'] = $this->input->post('id');

        $this->m_pasien->updatePasien($data, $condition);

        redirect(base_url('index.php/dataPasien'));

    }

    public function tampilPasien($id){
      $dataPasien = $this->m_pasien->getPasien($id);
       $this->load->view('pegawai/update-pasien.php', array(
         'dataPasien' => $dataPasien
       ));
      //$this->load->view('pegawai/rekam-medik.php',$medik);
    }

    public function index($idPasien)
    {
      $this->load->helper('url');
      $this->load->view('pegawai/update-pasien.php', $dataPasien);
    }
}
?>