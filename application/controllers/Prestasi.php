<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	function Sekolah(){
		$data['prestasi']=$this->M_alamin->select_prestasi();
		$this->load->view('user/v_prestasi',$data);
	}
	// function Siswa_Siswi(){
	// 	$this->load->view('user/v_pres_siswa');
	// }

}
