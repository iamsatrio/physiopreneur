<?php
class M_Rekam extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function tampil_id_pasien($idPasien){
        $this->db->select('tb_pasien.id, nama_pasien, foto');
        $this->db->from('tb_pasien');
        $this->db->where('tb_pasien.id',$idPasien);
		    return $this->db->get();
    }

    function tampil_rekam($idPasien){
        $this->db->select('tb_rekam_medik.tanggal, tb_rekam_medik.diagnosa, tb_tindakan.tindakan, tb_pegawai.nama');
        $this->db->from('tb_rekam_medik');
        $this->db->join('tb_pegawai','tb_rekam_medik.id_pegawai = tb_pegawai.id');
        $this->db->join('tb_rekam_medik_tindakan','tb_rekam_medik.id = tb_rekam_medik_tindakan.id_rekam_medik');
        $this->db->join('tb_tindakan','tb_tindakan.id = tb_rekam_medik_tindakan.id_tindakan');
        $this->db->where('tb_rekam_medik.id_pasien',$idPasien);
        // $this->db->group_by('tb_rekam_medik.id_pasien');
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
