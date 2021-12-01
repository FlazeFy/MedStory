<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class historyModel extends CI_Model {
		//Riwayat kesehatan
		public function get_data_berobat(){
			$data = $this->db->get('riwayatkesehatan');
			return $data->result_array();
		}
		//News Feed
		public function get_data_berita(){
			$data = $this->db->get('newsfeed');
			return $data->result_array();
		}
	}
?>
