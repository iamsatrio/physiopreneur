<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class SuperAdmin extends CI_Controller {

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
    function tampilDataManager()
    {
        $this->load->helper('url');
        $this->load->view('super/data-manager.php');
    }
}
?>
