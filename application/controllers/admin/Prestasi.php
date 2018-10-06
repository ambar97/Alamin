<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
	function __construct()
    {
	parent::__construct();
        $this->load->model('M_alamin');
    }

	public function index()
	{
		$this->load->view('admin/v_prestasi');
	}
}
