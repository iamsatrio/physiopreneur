<?php
class M_Tarif extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function tampil_tarif()
    {
        $this->db->select("*");
        $this->db->from('tb_tarif a');
        $this->db->join("tb_jenis_pembayaran b", "a.id_jenis_pembayaran = b.id");
        $this->db->join("tb_lokasi c", "a.id_lokasi = c.id");
        $this->db->order_by("c.id");
        return $this->db->get();
    }

    public function allLokasi()
    {
        $this->db->select("*");
        $this->db->from("tb_lokasi");
        return $this->db->get();
    }

    public function allJenisPembayaran()
    {
        $this->db->select("*");
        $this->db->from("tb_jenis_pembayaran");
        return $this->db->get();
    }

    public function tambahTarif($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
