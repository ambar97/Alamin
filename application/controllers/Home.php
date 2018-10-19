<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['slider1'] = $this->M_alamin->selectwhere('galeri', array('id_galeri'=>1));
		$data['slider2'] = $this->M_alamin->selectwhere('galeri', array('id_galeri'=>2));
		$data['kepsek'] = $this->M_alamin->selectwhere('karyawan', array('id_jabatan'=>1));
		$data['d_kepsek'] = $this->M_alamin->selectwhere('karyawan', array('id_bidang'=>1));
		$data['galeri'] = $this->M_alamin->selectlimitgallery('galeri');
		$data['berita'] = $this->M_alamin->selectlimitberita('informasi');
		$data['recent_berita'] = $this->M_alamin->recent_berita('informasi');
		$data['quote'] = $this->M_alamin->quote_home();
		// $data['motto_kepsek'] = $this->M_alamin->motto_kepsek($id);
		$this->load->view('user/v_home', $data);
	}
}
