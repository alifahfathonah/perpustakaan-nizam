<?php

/**
*
*/
class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('My_Models');
	}

	public function index()
	{
		$this->load->view('halaman_login');	
	}


	public function do_login()
	{
		$user = $this->input->post('uname');
		$pasw = $this->input->post('password');

		$login = $this->My_Models->Cek_login($user,$pasw);
	
		if (count($login) > 0) {
			redirect('Login/admin');
				
		} else {
			$this->session->set_flashdata('login','Username atau password salah');
			redirect('login/index');
		}
	}

	public function admin()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/admin');
		$this->load->view('template/footer');
	}
	
}