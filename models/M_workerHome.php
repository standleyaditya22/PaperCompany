<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_workerHome extends CI_Model 
{
		
		/*public function is_user_login_ok($username, $password){
			$query = $this->db->query("SELECT count(*) as ada FROM pengguna WHERE username='$username' AND password='$password'");
			return $query->row_array();
		}*/
	public function insert_order($data)
	{
		$res = $this->db->insert('orders', $data);
		return $res;
	}
	public function getOrders()
	{
		$query = $this->db->query('SELECT * FROM orders');
		return $query;
	}
	public function cancelOrders($id)
	{
		$query = $this->db->query("DELETE FROM orders where id = '$id'");
		return $query;
	}
	public function getStocks()
	{
		$query = $this->db->query('SELECT * FROM stocks');
		return $query;
	}
	public function getBook()
	{
		$query = $this->db->query('SELECT * FROM book_stock');
		return $query;
	}
	public function updateStock($id,$n)
	{
		$query = $this->db->query("UPDATE book_stock SET amount = '$n' WHERE id = '$id'");
		return $query;
	}
	public function insertReport($data)
	{
		$res = $this->db->insert('laporan_produksi', $data);
		return $res;
	}
}