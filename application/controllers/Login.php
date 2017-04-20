<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('login.php');
	}

	function action_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->m_login->cek_login($username,$password);
		if($cek->num_rows() == 1){
			foreach($cek->result() as $data){
				$session_data['id'] = $data->id;
				$session_data['username'] = $data->username;
				$session_data['role_id'] = $data->id_role;
				$session_data['status'] = 1;
				$this->session->set_userdata($session_data);
			}
			
			if ($session_data['role_id']==1) {
				redirect(base_url('index.php/manager'));
			} else if ($session_data['role_id']==2) {
				redirect(base_url('index.php/pegawai'));
			}

		}else{
			 $message = "Maaf, kombinasi username dan password salah";
			 echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('index.php', 'refresh');
		}
	}

	function action_logout(){
		$this->session->sess_destroy();
		$session_data['status'] = 0;
		redirect(base_url());
	}
}
