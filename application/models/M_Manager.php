<?php

class M_Manager extends CI_Model{

	/*function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}*/

	function tambah_manager($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function tampil_data($id)
	{
		$this->db->where('id', $idPegawai);
		$ambildata = $this->db->get('tb_manager');
		if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
	}

	function tampil_manager()
	{
		$this->db->from('tb_manager');
		return $this->db->get();
	}

	function get_manager($idManager){

		$this->db->select("*");
		$this->db->from("tb_manager");
		$this->db->where("id", $idManager); //select sesuai dengan ID Manager
		return $this->db->get();
	}

    function update_manager($data, $condition)
	{
        $this->db->where($condition);
		$this->db->update("tb_manager", $data);
    }

}

?>
