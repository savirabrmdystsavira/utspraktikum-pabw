<?php 

class Mahasiswaguruuu_model extends CI_model {
    public function getallMahasiswaguruuu()
    {
        return $this->db->get('mahasiswaguruuu')->result_array();
    }
    public function tambahDataMahasiswaguruuu(){
    	$data = [
    		"nama" => $this->input->post('nama',true),
    		    		"nrp" => $this->input->post('nrp',true),
    		    		    		"email" => $this->input->post('email',true),
    		    		    		    		"jurusan" => $this->input->post('jurusan',true)		
    	];

    	$this->db->insert('mahasiswaguruuu', $data);

    }

    public function hapusDataMahasiswaguruuu($id)
    {
    	// $this->db->where('id', $id);
    	$this->db->delete('mahasiswaguruuu',['id'=>$id]);	
    }
    public function getMahasiswaguruuuById($id)
    {
        return $this->db->get_where('mahasiswaguruuu',['id'=>$id])->row_array();
    }

    public function ubahDataMahasiswaguruuu()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)     
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswaguruuu', $data);

    }
     public function cariDataMahasiswaguruuu()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama', $keyword);
            $this->db->or_like('nrp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jurusan', $keyword);
            return $this->db->get('mahasiswaguruuu')->result_array();
        }

}


