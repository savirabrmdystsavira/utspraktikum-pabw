<?php 

class Mahasiswaguruu_model extends CI_model {
    public function getallMahasiswaguruu()
    {
        return $this->db->get('mahasiswaguruu')->result_array();
    }
    public function tambahDataMahasiswaguruu(){
    	$data = [
    		"nama" => $this->input->post('nama',true),
    		    		"nrp" => $this->input->post('nrp',true),
    		    		    		"email" => $this->input->post('email',true),
    		    		    		    		"jurusan" => $this->input->post('jurusan',true)		
    	];

    	$this->db->insert('mahasiswaguruu', $data);

    }

    public function hapusDataMahasiswaguruu($id)
    {
    	// $this->db->where('id', $id);
    	$this->db->delete('mahasiswaguruu',['id'=>$id]);	
    }
    public function getMahasiswaguruuById($id)
    {
        return $this->db->get_where('mahasiswaguruu',['id'=>$id])->row_array();
    }

    public function ubahDataMahasiswaguruu()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)     
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswaguruu', $data);

    }
     public function cariDataMahasiswaguruu()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama', $keyword);
            $this->db->or_like('nrp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jurusan', $keyword);
            return $this->db->get('mahasiswaguruu')->result_array();
        }

}


