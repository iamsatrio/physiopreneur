<?php
(defined('BASEPATH')OR exit('No direct script access allowed'));

class Pembayaran extends CI_Controller {
    
    function index()
    {
        $this->load->helper('url');
        $this->load->view('pegawai/pembayaran.php');
    }
}
?>