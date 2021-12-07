<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class createAccModel extends CI_Model {
		function buat($data)
		{
			$this->db->insert('pengguna',$data);
		}
		function recordlogin($data)
		{
			$this->db->insert('loginuser',$data);
		}	
	}
?>
