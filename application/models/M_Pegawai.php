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
		$this->db->where('id', $idPegawai);
		$ambildata = $this->db->get('tb_pegawai');
		if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
	}

	function tampil_pegawai()
	{
		$this->db->from('tb_pegawai');
    $this->db->join('tb_lokasi','tb_pegawai.id_lokasi = tb_lokasi.id');
		return $this->db->get();
	}

}

?>
