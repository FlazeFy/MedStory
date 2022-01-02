<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_Berita_model extends CI_model
{
    public function getBerita()
    {
        return $this->db->get('berita')->result_array();
    }

    public function tambahBerita($data)
    {
        $data = array(
            'id_berita' => 'NULL',
            'namaberita' => $this->input->post('namaberita'),
            'tanggal' => $this->input->post('tanggal'),
            'fotoberita' => $this->upload->data('file_name'),
            'isiberita' => $this->input->post('isiberita')
        );
        if ($this->db->insert('berita', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function editBerita()
    {
        $id_berita = $this->input->post('id_berita');
        $data = [
            'namaberita' => $this->input->post('namaberita'),
            'tanggal' => $this->input->post('tanggal'),
            'fotoberita' => $this->upload->data('file_name'),
            'isiberita' => $this->input->post('isiberita')
        ];
        $this->edit_Berita->edit_mahasiswa($id_berita, $data);
        redirect('InputBerita');
    }
}
