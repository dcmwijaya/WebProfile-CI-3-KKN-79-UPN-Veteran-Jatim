<?php

class RoboticsModel extends CI_Model
{
    //Query Read All Data
    public function getAllData()
    {
        $query = $this->db->get('robotics');
        return $query->result_array();
    }

    //Query Read Pagination Search
    public function getData($limit, $start, $keyword=null)
    {
        if($keyword){
            $this->db->like('nama', $keyword);
        }

        return $this->db->get('robotics', $limit, $start)->result_array();
    }

    //Query Count Data
    public function countAllData()
    {
        $query = $this->db->get('robotics')->num_rows();
        return $query;
    }

    //Query Count Sains Data
    public function countSD()
    {
        $this->db->where('prodi', 'Sains Data');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Computer Sains
    public function countCS()
    {
        $this->db->where('prodi', 'Computer Sains');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Information System
    public function countIS()
    {
        $this->db->where('prodi', 'Information System');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Informatika
    public function countIF()
    {
        $this->db->where('prodi', 'Informatika');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Sistem Informasi
    public function countSI()
    {
        $this->db->where('prodi', 'Sistem Informasi');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Teknik Kimia
    public function countTK()
    {
        $this->db->where('prodi', 'Teknik Kimia');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Teknik Mesin
    public function countTM()
    {
        $this->db->where('prodi', 'Teknik Mesin');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Teknik Industri
    public function countTI()
    {
        $this->db->where('prodi', 'Teknik Industri');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Teknik Sipil
    public function countTS()
    {
        $this->db->where('prodi', 'Teknik Sipil');
        return $this->db->count_all_results('robotics');
    }

    //Query Count Arsitektur
    public function countAR()
    {
        $this->db->where('prodi', 'Arsitektur');
        return $this->db->count_all_results('robotics');
    }

    //Query Create
    public function createData()
    {
        $data = [
            'email' => $this->input->post('email'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'wa' => $this->input->post('wa')
        ];

        $this->db->insert('robotics', $data);
    }

    //Query Update
    public function updateData($id)
    {
        $data = [
            'id' => $id,
            'email' => $this->input->post('email'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'wa' => $this->input->post('wa')
        ];

        $this->db->where('id', $id);
        $this->db->update('robotics', $data);
    }

    //Query Delete
    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('robotics');
    }

    //Query Reset ID
    public function getReset()
    {
        $query = "SET @num := 0; UPDATE robotics SET id = @num := (@num+1);";
        $this->db->query($query);
    }

}