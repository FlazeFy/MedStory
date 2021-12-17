<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landingModel extends CI_Model 
	{
		function recordlogin($data)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//Mengecek ketersedian username.
			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = array('namaPengguna' => $data['username'], 'password' => $data['password']);
			$this->db->where($condition);
			$userCheck = $this->db->get()->result();
			if(count($userCheck) == 1){
				$this->db->insert('loginuser',$data);
				$this->session->set_userdata('userTrack',$username);	
				redirect('history');
			}else{
				$data['error_message'] = "Login failed LOL";
				redirect('landing');
			}
		}	
	}
?>
