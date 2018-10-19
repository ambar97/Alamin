<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function Berita(){
		$data['berit'] = $this->M_alamin->selectlimit('informasi');
		$this->load->view('user/v_informasi',$data);
	}

	function Berita_Detail(){
		$this->load->view('user/v_informasi_detail');
	}
}
