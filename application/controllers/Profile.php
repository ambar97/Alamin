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
	function Extra(){
		$this->load->view('user/v_extrakulikuler');
	}
	function KepSek(){
		$this->load->view('user/v_kepsek');
	}
	function BagTu(){
		$this->load->view('user/v_bagTU');
	}
	function WakaKes(){
		$this->load->view('user/v_wakakes');
	}
	function WakaKur(){
		$this->load->view('user/v_wakakur');
	}
	function WakaSap(){
		$this->load->view('user/v_wakasaphum');
	}
	function Guru(){
		$this->load->view('user/v_guru');
	}
}
