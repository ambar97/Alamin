<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{
		$data['berita']=$this->M_alamin->select("informasi");
		$this->load->view('admin/v_berita', $data);
	}
	public function t_berita(){
		$this->load->view('admin/validation/t_berita');
	}

	public function i_berita(){
		$now = date('Y-m-d H:i:s');
		$data['judul_informasi']=$this->input->post('judul_informasi');
		$data['isi_informasi']=$this->input->post('isi_informasi');
		$data['date'] = $now;
		$this->M_alamin->insert('informasi', $data);
		header('location:'.base_url().'admin/Berita');
	}
}
