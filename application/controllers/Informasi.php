<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function Berita(){
		$this->load->view('user/v_info_berita');
	}
	function Pengumuman(){
		$this->load->view('user/v_info_peng');
	}
	function InfoKeg(){
		$this->load->view('user/v_info_keg');
	}

}
