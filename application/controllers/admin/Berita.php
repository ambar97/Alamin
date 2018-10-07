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
}
