<?php

class Data_buku extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_buku');
	}

	public function index()
	{
		$data['buku'] = $this->model_buku->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/data_buku', $data);
		$this->load->view('template/footer');
	}
}