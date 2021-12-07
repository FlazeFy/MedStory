<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class historyModel extends CI_Model {
		//Riwayat kesehatan
		public function get_data_berobat(){
			$this->db->order_by('tanggal','DESC');
			$data = $this->db->get('riwayatkesehatan_flazefy');
			return $data->result_array();
		}
		//News Feed
		public function get_data_berita(){
			$data = $this->db->get('newsfeed');
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
	}
?>
