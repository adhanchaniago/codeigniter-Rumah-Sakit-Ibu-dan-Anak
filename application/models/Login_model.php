<?php
class Login_model extends CI_Model{
	//cek nip dan password admin
	function auth_superadmin($username,$password){
		$query=$this->db->query("SELECT * FROM superadmin WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM administrator WHERE username_admin='$username' AND password_admin='$password' LIMIT 1");
		return $query;
	}

	function auth_dokter($username,$password){
		$query=$this->db->query("SELECT * FROM dokter WHERE username_dokter='$username' AND password_dokter='$password' LIMIT 1");
		return $query;
	}
	function auth_adminlab($username,$password){
		$query=$this->db->query("SELECT * FROM adminlab WHERE username_adminlab='$username' AND password_adminlab='$password' LIMIT 1");
		return $query;
	}
	function auth_kasir($username,$password){
		$query=$this->db->query("SELECT * FROM kasir WHERE username_kasir='$username' AND password_kasir='$password' LIMIT 1");
		return $query;
	}

	function auth_farmasi($username,$password){
		$query=$this->db->query("SELECT * FROM farmasi WHERE username_farmasi='$username' AND password_farmasi='$password' LIMIT 1");
		return $query;
	}

	

}
