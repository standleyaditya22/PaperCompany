<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_login extends CI_Model {
		
		/*public function is_user_login_ok($username, $password){
			$query = $this->db->query("SELECT count(*) as ada FROM pengguna WHERE username='$username' AND password='$password'");
			return $query->row_array();
		}*/
		public function is_user_login_ok($username, $password){
			$query=$this->db->query("SELECT * FROM pengguna WHERE username='$username' AND password='$password'LIMIT 1");
			return $query;
		}

		
		public function register_acc($user){
			$res = $this->db->insert('pengguna', $user);
			return $res;
		}
	}