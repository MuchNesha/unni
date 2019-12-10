<?php 

class model_login extends CI_Model{
	function ambil_data(){
		return $this->db->get('admin');
	}
}