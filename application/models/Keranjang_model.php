<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Keranjang_model extends CI_Model {

	public function get_produk_all()
	{
		$query = $this->db->get('barang');
		return $query->result_array();
	}
	
	public function get_produk_kategori($kategori)
	{
		if($kategori>0)
			{
				$this->db->where('id_jenis',$kategori);
			}
		$query = $this->db->get('barang');
		return $query->result_array();
	}
	
	public function get_kategori_all()
	{
		$query = $this->db->get('jenis_barang');
		return $query->result_array();
	}
	
	public  function get_produk_id($id)
	{
		$this->db->select('barang.*,id_jenis');
		$this->db->from('barang');
		$this->db->join('jenis_barang', 'id_jenis=jenis_barang.id_jenis','left');
   		$this->db->where('id_barang',$id);
        return $this->db->get();
    }	
	
	public function tambah_pelanggan($data)
	{
		$this->db->insert('tb_pelanggan', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_order($data)
	{
		$this->db->insert('tb_order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_detail_order($data)
	{
		$this->db->insert('tb_detail_order', $data);
	}
}
?>