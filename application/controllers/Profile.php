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
		$data['kepsek'] = $this->M_alamin->selectwhere('karyawan', array('id_bidang' => 1));
		$data['proker'] = $this->M_alamin->selectwhere('proker', array('id_bidang' => 1));
		$this->load->view('user/v_kepsek', $data);
	}
	function BagTu(){
		$data['struktur_tu'] = $this->M_alamin->selectwhere('galeri_struktur', array('id_bidang' => 2));
		$data['proker'] = $this->M_alamin->selectwhere('proker', array('id_bidang' => 2));
		$this->load->view('user/v_bagTU', $data);
	}
	function WakaKes(){
		$data['struktur_wakakes'] = $this->M_alamin->selectwhere('galeri_struktur', array('id_bidang' => 3));
		$data['proker'] = $this->M_alamin->selectwhere('proker', array('id_bidang' => 3));
		$this->load->view('user/v_wakakes', $data);
	}
	function WakaKur(){
		$data['struktur_wakakur'] = $this->M_alamin->selectwhere('galeri_struktur', array('id_bidang' => 4));
		$data['proker'] = $this->M_alamin->selectwhere('proker', array('id_bidang' => 4));
		$this->load->view('user/v_wakakur', $data);
	}
	function WakaSap(){
		$data['struktur_wakasap'] = $this->M_alamin->selectwhere('galeri_struktur', array('id_bidang' => 5));
		$data['proker'] = $this->M_alamin->selectwhere('proker', array('id_bidang' => 5));
		$this->load->view('user/v_wakasaphum', $data);
	}
	function Guru(){
		$data['guru'] = $this->M_alamin->selectwhere('karyawan', array('id_bidang' => 6));
		$this->load->view('user/v_guru', $data);
	}
}
