<?php

class model_konfirmasi extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function getAllData()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/
        $this->db->select('*');
        $this->db->from('konfirmasi');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan=konfirmasi.id_pelanggan');
        $query = $this->db->get();


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }


    function getDataPelanggan()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT * FROM pelanggan');


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }
}
