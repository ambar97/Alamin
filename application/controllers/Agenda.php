<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function index()
	{
		$data['agenda'] = $this->M_alamin->select('agenda');
		$this->load->view('user/v_agenda',$data);
	}
}
