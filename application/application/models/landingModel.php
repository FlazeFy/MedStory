<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landingModel extends CI_Model 
	{
		function recordlogin($data)
		{
			$this->db->insert('loginuser',$data);
		}	
	}
?>
