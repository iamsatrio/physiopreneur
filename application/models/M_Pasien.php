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

	//max_id untuk tampil saat setelah add
	function max_id()
	{
		$this->db->select_max('id');
		$result = $this->db->get('tb_pasien')->row();
		return $result->id;
	}

	function getPasien($idPasien){

		$this->db->select("*");
		$this->db->from("tb_pasien");
		$this->db->where("id", $idPasien); //select sesuai dengan ID Pasien
		return $this->db->get();
	}

    function updatePasien($data, $condition){
        //update Pasien
    $this->db->where($condition);
		$this->db->update("tb_pasien", $data);
  }

	function pembayaran_pasien($kdPasien)
	{
		$this->db->select('a.id,a.kode_pasien,a.id_jenis_pasien,a.nama_pasien,a.free_pass,b.diagnosa');
		$this->db->from('tb_pasien a');
		$this->db->join('tb_rekam_medik b','a.id=b.id_pasien');
		$this->db->where('b.id = (SELECT MAX(id) FROM tb_rekam_medik WHERE id_pasien = (SELECT id FROM tb_pasien WHERE kode_pasien = '.$kdPasien.'))');
		//$this->db->where('kode_pasien',$kdPasien);
		return $this->db->get();
	}

	function getJenisPasien($idJenisPasien){

		$this->db->select("*");
		$this->db->from("tb_jenis_pasien");
		$this->db->where("id", $idJenisPasien); //select sesuai dengan ID Jenis Pasien
		return $this->db->get();
	}

	function getIdPasien($kdPasien){
		$this->db->select('id');
		$this->db->where('kode_pasien',$kdPasien);
		$result = $this->db->get('tb_pasien')->row();
		return $result->id;
	}

	function tambahPembayaranPasien($data,$table){
		$this->db->insert($table,$data);
	}

	function getRekamPasien($idPasien){
		$this->db->select_max('id');
		$this->db->where('id_pasien',$idPasien);
		$result = $this->db->get('tb_rekam_medik')->row();
		return $result->id;
	}

	function updateFreePassPasien($updateData,$kdPasien){
		$this->db->where('kode_pasien',$kdPasien);
		$this->db->update('tb_pasien',$updateData);
	}
	function getFreePassPasien($kdPasien){
		$this->db->select('free_pass');
		$result = $this->db->get('tb_pasien')->row();
		return $result->free_pass;
	}
	function getTarifBasedLocation($idLokasi,$idJenisPembayaran){
		$this->db->select("*");
		$this->db->from("tb_tarif");
		$this->db->where("id_lokasi", $idLokasi);
		$this->db->where("id_jenis_pembayaran", $idJenisPembayaran);
		$query = $this->db->get()->row();
		return $query->tarif;
	}
	function getTarifAwal($idLokasi){
		$this->db->select("*");
		$this->db->from("tb_tarif");
		$this->db->where("id_lokasi", $idLokasi);
		$this->db->where("id_jenis_pembayaran", 1);
		return $this->db->get();		
	}
}

?>
