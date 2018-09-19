<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	function VisiMisi(){
		$this->load->view('user/v_visimisi');
	}
	function SejarahSek(){
		$this->load->view('user/v_sejarah');
	}
	function SarPrasarana(){
		$this->load->view('user/v_sarana');
	}
	function BagSekolah(){
		$this->load->view('user/v_bagan');
	}
	function ProgKerja(){
		$this->load->view('user/v_proker');
	}

}
