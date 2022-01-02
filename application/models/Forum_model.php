<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum_model extends CI_model
{
    public function getDiskusi()
    {
        return $this->db->get('forum_diskusi')->result_array();
    }
    public function getBerita()
    {
        return $this->db->get('berita')->result_array();
    }
    public function tambahDiskusi($data)
    {
        return $this->db->insert('forum_diskusi', $data);
    }
}
