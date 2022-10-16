<?php 

class Mahasiswaguru_model extends CI_model {
    public function getallMahasiswaguru()
    {
        return $this->db->get('mahasiswaguru')->result_array();
    }
    public function tambahDataMahasiswaguru(){
    	$data = [
    		"nama" => $this->input->post('nama',true),
    		    		"nrp" => $this->input->post('nrp',true),
    		    		    		"email" => $this->input->post('email',true),
    		    		    		    		"jurusan" => $this->input->post('jurusan',true)		
    	];

    	$this->db->insert('mahasiswaguru', $data);

    }

    public function hapusDataMahasiswaguru($id)
    {
    	// $this->db->where('id', $id);
    	$this->db->delete('mahasiswaguru',['id'=>$id]);	
    }
    public function getMahasiswaguruById($id)
    {
        return $this->db->get_where('mahasiswaguru',['id'=>$id])->row_array();
    }

    public function ubahDataMahasiswaguru()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)     
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswaguru', $data);

    }
     public function cariDataMahasiswaguru()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama', $keyword);
            $this->db->or_like('nrp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jurusan', $keyword);
            return $this->db->get('mahasiswaguru')->result_array();
        }

}


