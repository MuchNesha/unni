<?php 

class model_kategori extends CI_Model{

public function __construct()
    {
        parent::__construct();
    }

    function getAllGroups()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT * FROM jenis_barang');


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }
}   