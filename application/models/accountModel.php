<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class accountModel extends CI_Model {
		public function get_data_user(){
			$data = $this->db->get('pengguna');
			return $data->result_array();
		}
		//Hubungkan data ke tiap halaman
		public function usertracker()
		{
			$this->db->select('*');
			$this->db->from('loginuser');
			$this->db->order_by('id_login desc');
			$this->db->limit('1');
			return $this->db->get()->result();
		}
		//Ubah data
		function ubahData($data)
		{
			$id = $this->input->post('id');
			$this->db->where('id_user', $id);
			$this->db->update('pengguna', $data);
			redirect('account');
		}	
	}
?>
