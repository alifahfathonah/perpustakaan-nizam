<?php

class Model_buku extends CI_Model{
	public function tampil_data(){
		return $this->db->get('buku');
	}
}