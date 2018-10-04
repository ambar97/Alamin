<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function index()
	{
		$data['karyaw']=$this->M_alamin->select_multy();
		$this->load->view('admin/v_karyawan',$data);
	}
}
