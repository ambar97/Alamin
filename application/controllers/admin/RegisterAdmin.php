<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_register_adm');
	}
}
