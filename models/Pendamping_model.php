<?php

class Pendamping_model extends CI_model {
    public function getallPendamping()
    {
        return $this->db->get('pendamping')->result_array();
    }
    public function tambahDataPendamping(){
    	$data = [
    		"nama" => $this->input->post('nama',true),
    		    		"nrp" => $this->input->post('nrp',true),
    		    		    		"email" => $this->input->post('email',true),
    		    		    		    		"jk" => $this->input->post('jk',true)		
    	];

    	$this->db->insert('pendamping', $data);

    }

    public function hapusDataPendamping($id)
    {
    	// $this->db->where('id', $id);
    	$this->db->delete('pendamping',['id'=>$id]);	
    }
    public function getPendampingById($id)
    {
        return $this->db->get_where('pendamping',['id'=>$id])->row_array();
    }

    public function ubahDataPendamping()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jk" => $this->input->post('jk',true)     
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pendamping', $data);

    }
     public function cariDataPendamping()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama', $keyword);
            $this->db->or_like('nrp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jk', $keyword);
            return $this->db->get('pendamping')->result_array();
        }

}

