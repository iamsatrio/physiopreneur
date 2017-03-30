<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class TambahRekamMedik extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_rekam');

    }

    public function index(){
        $this->load->helper('url');
        $this->load->view('pegawai/tambah-keluhan-tindakan.php');
    }

    public function tambah_rekam_med()
    {
        $this->load->library('upload');
        $idPasien = $this->input->post('idPasien');
        $tanggal = $this->input->post('tanggalRekam');
        $diagnosa = $this->input->post('diagnosa');
        $idPegawai = $this->input->post('idPegawai');
        //belom kelar  huft maafkan
    }
}
?>