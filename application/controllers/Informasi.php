<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function Berita(){
		$data['recent_berita'] = $this->M_alamin->recent_berita('informasi');
		$data['berit'] = $this->M_alamin->selectlimit('informasi');
		$this->load->view('user/v_informasi',$data);
	}

	function detail(){
		$id=$this->uri->segment(3);
		$where['id_informasi'] = $id;
		$data['recent_berita'] = $this->M_alamin->recent_berita('informasi'); 
		$data['d_berita'] = $this->db->query("SELECT * FROM informasi WHERE id_informasi = '$id'");
		$this->load->view('user/v_informasi_detail',$data);
	}
}
