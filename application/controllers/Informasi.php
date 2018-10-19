<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function Berita(){
		$data['berit'] = $this->M_alamin->selectlimit('informasi');
		$this->load->view('user/v_informasi',$data);
	}

	function Berita_Detail(){
		$id=$this->uri->segment(4);
		$data['tampil_berita'] = $this->M_alamin->selectwhere('informasi',array('id_informasi'=>$id));
		$this->load->view('user/v_informasi_detail',$data);
	}
}
