<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalendar extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_kalendar');
	}
}
