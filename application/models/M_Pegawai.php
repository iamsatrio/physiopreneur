<?php

class M_Pegawai extends CI_Model{

	/*function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}*/

	function tambah_pegawai($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function tampil_data($id)
	{
		$this->db->where('id', $id);
		$ambildata = $this->db->get('tb_pegawai');
		if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
	}

	function tampil_pegawai(){
		$this->db->from('tb_pegawai');
    $this->db->join('tb_lokasi','tb_pegawai.id_lokasi = tb_lokasi.id');
		$this->db->join('tb_user','tb_pegawai.id_user = tb_user.id');
		$this->db->where('tb_user.id_role',2);
		return $this->db->get();
	}

	function data_pegawai($id){
		$this->db->select('nama');
        $this->db->from('tb_pegawai');
        $this->db->where('id',$id);
		    return $this->db->get();
	}

	function get_nama_pegawai($id){
		$this->db->select('nama');
		$this->db->from('tb_pegawai');
		$this->db->where('id',$id);
		$result = $this->db->get();
		if($result->num_rows() > 0){
			return $result->result();
		}
	}

	function getPegawai($idPegawai){
		$this->db->select("*");
		$this->db->from("tb_pegawai");
		$this->db->where("id", $idPegawai); //select sesuai dengan ID Pasien
		return $this->db->get();
	}

}

?>
