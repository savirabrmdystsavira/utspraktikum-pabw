<?php 

class Mahasiswaa_model extends CI_model {
    public function getallMahasiswaa()
    {
        return $this->db->get('mahasiswaa')->result_array();
    }
    public function tambahDataMahasiswaa(){
        $data = [
            "nama" => $this->input->post('nama',true),
                        "nrp" => $this->input->post('nrp',true),
                                    "email" => $this->input->post('email',true),
                                                "jurusan" => $this->input->post('jurusan',true)     
        ];

        $this->db->insert('mahasiswaa', $data);

    }

    public function hapusDataMahasiswaa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('mahasiswaa',['id'=>$id]); 
    }
    public function getMahasiswaaById($id)
    {
        return $this->db->get_where('mahasiswaa',['id'=>$id])->row_array();
    }

    public function ubahDataMahasiswaa()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)     
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswaa', $data);

    }
     public function cariDataMahasiswaa()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama', $keyword);
            $this->db->or_like('nrp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jurusan', $keyword);
            return $this->db->get('mahasiswaa')->result_array();
        }

}


