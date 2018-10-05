<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturPers extends CI_Controller {

	public function index(){
		// $this->load->view('admin/v_sarpras');
	}
	function Kepsek(){
		$this->load->view('admin/v_kepsek');
	}
	function TataUsaha(){
		$this->load->view('admin/v_tata_usaha');
	}
	function Kesiswaan(){
		$this->load->view('admin/v_kesiswaan');
	}
	function Kurikulum(){
		$this->load->view('admin/v_kurikulum');
	}
	function SarprasHum(){
		$this->load->view('admin/v_sarpras_humas');
	}
}
