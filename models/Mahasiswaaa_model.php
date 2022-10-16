<?php 

class Mahasiswaaa_model extends CI_model {
    public function getallMahasiswaaa()
    {
        return $this->db->get('mahasiswaaa')->result_array();
    }
    public function tambahDataMahasiswaaa(){
    	$data = [
    		"nama" => $this->input->post('nama',true),
    		    		"nrp" => $this->input->post('nrp',true),
    		    		    		"email" => $this->input->post('email',true),
    		    		    		    		"jurusan" => $this->input->post('jurusan',true)		
    	];

    	$this->db->insert('mahasiswaaa', $data);

    }

    public function hapusDataMahasiswaaa($id)
    {
    	// $this->db->where('id', $id);
    	$this->db->delete('mahasiswaaa',['id'=>$id]);	
    }
    public function getMahasiswaaaById($id)
    {
        return $this->db->get_where('mahasiswaaa',['id'=>$id])->row_array();
    }

    public function ubahDataMahasiswaaa()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)     
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswaaa', $data);

    }
     public function cariDataMahasiswaaa()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama', $keyword);
            $this->db->or_like('nrp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jurusan', $keyword);
            return $this->db->get('mahasiswaaa')->result_array();
        }

}


