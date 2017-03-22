<?php
class M_Rekam extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function tampil_rekam(){
        $this->db->from('tb_rekam_medik');
		return $this->db->get();	
    }

    function tambah_rekam($data,$table){
		$this->db->insert($table,$data);
	}
	
	// function tampil_rekamdata($idPasien){
	// 	$this->db->where('id', $idPasien);
	// 	$ambildata = $this->db->get('tb_rekam_medik');
	// 	if ($ambildata->num_rows() > 0 ) {
    //         foreach ($ambildata->result() as $data) {
    //             $hasil[] = $data;
    //         }
    //         return $hasil;
    //     }
	// }

}
?>