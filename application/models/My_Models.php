<?php


/**
*
*/
class My_Models extends CI_Model
{

	public function Cek_login ($user,$pasw)
	{
		return $this->db->get_where('admin',array(
			'username' =>$user,
			'password' =>$pasw
		))->result_array();
	}	

	
}