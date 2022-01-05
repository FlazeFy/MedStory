<?php
class M_Dokter extends CI_Model
{
    public function getAllHospital()
    {
        #Memanggil data dari database, dan return hasilnya
        $data = $this->db->get('hospital');
        return $data->result_array();
    }
}
