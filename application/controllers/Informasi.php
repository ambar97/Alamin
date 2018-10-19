<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function Berita(){
		$data['berit'] = $this->M_alamin->selectlimit('informasi');
		$data['recent_berita'] = $this->M_alamin->recent_berita_limit('informasi');
		$this->load->view('user/v_informasi',$data);
	}

	function Berita_Detail(){
		// $id=$this->uri->segment(4);
		// $data['detail'] = $this->M_alamin->selectwhere('informasi',array('id_informasi'=>$id));
		$this->load->view('user/validation/detail_informasi');
	}
}
