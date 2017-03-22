<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class RekamMedik extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_rekam');
    }

    public function index()
    {
        $rekamMedik['listRekam'] = $this->m_rekam->tampil_rekam();
        $this->load->helper('url');
        $this->load->view('pegawai/rekam-medik.php', $rekamMedik);
    }

}
?>