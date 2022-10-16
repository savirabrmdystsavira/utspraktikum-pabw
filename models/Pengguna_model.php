<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
    public function import_data($datapengguna)
    {
        $jumlah = count($datapengguna);
        if ($jumlah > 0) {
            $this->db->replace('m_pengguna', $datapengguna);
        }
    }

    public function getDataPengguna($tanggalawal = null, $tanggalakhir = null)
    {
        $tanggalawalbaru = strtotime($tanggalawal);
        $tanggalakhirbaru = strtotime($tanggalakhir);
        if ($tanggalawal && $tanggalakhir) {
            $this->db->where('date_created >=', $tanggalawalbaru);
            $this->db->where('date_created <=', $tanggalakhirbaru);
        }
        return $this->db->get('m_pengguna')->result_array();
    }
    public function getPenggunaById($id)
    {
        return $this->db->get_where('pengguna', ['id' => $id])->row_array();
    }
    public function hapusDataPengguna($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('m_pengguna',['id'=>$id]);    
    }

}