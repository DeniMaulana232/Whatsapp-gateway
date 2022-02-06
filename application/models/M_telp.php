<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_telp extends CI_Model
{
    public function listWA()
    {
        return $this->db->get('daftar_nomor')->result();
      
    }

    public function AddNumbers($data){
        $this->db->insert('daftar_nomor', $data);
        return true;
  }
}