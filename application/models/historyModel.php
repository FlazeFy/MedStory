<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class historyModel extends CI_Model {
		//Riwayat kesehatan
		public function get_data_berobat(){
			$this->db->select('*');
			$this->db->from('riwayatkesehatan');
			$condition = $this->session->userdata('userTrack');
			$this->db->order_by('tanggal','DESC');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		//News Feed
		public function get_data_berita(){
			$data = $this->db->get('newsfeed');
			return $data->result_array();
		}
	}
?>
