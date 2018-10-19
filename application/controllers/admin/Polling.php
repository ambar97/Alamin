<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	

class Polling extends CI_Controller {
function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{
		// $data['agenda'] = $this->M_alamin->select('agenda');
		$this->load->view('admin/v_polling');
	}
}