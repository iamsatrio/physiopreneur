<?php

class M_Pasien extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	
	function tampil_pasien() //Select semua data pada tb_pasien
	{
		$this->db->from('tb_pasien');
		return $this->db->get();
	}

	function tambah_pasien($data,$table){
		$this->db->insert($table,$data);
	}


	//max_id untuk tampil saat setela add
	function max_id()
	{
		$this->db->select_max('id');
		$result = $this->db->get('tb_pasien')->row();
		return $result->id;
	}

	function getPasien($idPasien){
		$this->db->where("id", $idPasien); //select sesuai dengan ID Pasien
		$this->db->select("*");
		$this->db->from("tb_pasien");

		return $this->db->get();
	}
	
    function updatePasien($data, $condition)
	{
        //update Pasien
        $this->db->where($condition);
		$this->db->update("tb_pasien", $data);
    }
	
}

?>
