<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pages extends CI_Model
{
	public function get_buku()
	{
		$query = $this->db->query('SELECT * FROM daftar_buku');
		return $query;
	}

	public function insert_pesanan($data)
	{
		return $this->db->insert('daftar_pesanan_buku', $data);
	}
	public function insert_laporan($data)
	{
		return $this->db->insert('laporan_penjualan', $data);
	}
	function show_status($nama)
	{       
		return $this->db->query("SELECT * FROM daftar_pesanan_buku where nama_pemesan='$nama'");
    }    
    function show_laporan()
    {
    	return $this->db->query("SELECT * FROM laporan_penjualan");
    }
}