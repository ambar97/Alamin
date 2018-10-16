<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_alamin');
		$this->load->model('core');
	}
	function VisiMisi(){
		$data['visimisi'] = $this->M_alamin->select("visi_misi");
		$this->load->view('user/v_visimisi', $data);
	}
	function SejarahSek(){
		$data['sejarah'] = $this->M_alamin->select('sejarah');
		$this->load->view('user/v_sejarah',$data);
	}
	function SarPrasarana(){
		$data['sarpras']=$this->M_alamin->select('sarana_prasarana');
		$this->load->view('user/v_sarana',$data);
	}
	function BagSekolah(){
		$data['bagan']=$this->M_alamin->select('denah_sekolah');
		$this->load->view('user/v_bagan',$data);
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
