<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class accountModel extends CI_Model {
		public function get_data_user(){
			$data = $this->db->get('pengguna');
			return $data->result_array();
		}
	}
?>
