<?php

class M_login extends CI_Model{

	/*function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}*/

	function cek_login($username,$password){
		$this->db->select('tb_user.id, tb_user.username, tb_user.id_role, tb_pegawai.id_lokasi');
		$this->db->from('tb_user');
		$this->db->join('tb_pegawai','tb_user.id = tb_pegawai.id_user');
		$this->db->where('tb_user.username',$username);
		$this->db->where('tb_user.password',$password);
		return $this->db->get();
	}

}

?>
