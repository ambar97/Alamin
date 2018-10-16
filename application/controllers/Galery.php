<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_alamin');
		$this->load->model('core');
	}
	public function index()
	{
		$data['galery']=$this->M_alamin->get_galery();
		$this->load->view('user/v_galery',$data);
	}
}
