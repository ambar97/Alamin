<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_alamin');
		$this->load->model('core');
	}
	public function index()
	{
		$data['kritiksaran'] = $this->M_alamin->select('kritik_saran');
		$this->load->view('user/v_contact',$data);
	}
	public function kirim_kritiksaran(){
		$data['nama_kritik_saran']=$this->input->post('username');
		$data['email_kritik_saran']=$this->input->post('email');
		$data['isi_kritik_saran']=$this->input->post('isi');
		$data['id_status_dibaca'] = 1;
		$up = $this->M_alamin->insert('kritik_saran', $data);
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di kirim ke admin"));
		header('location:'.base_url().'ContactUs');
		}else{
			$this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di kirim, cek isi dan koneksi anda"));
			header('location:'.base_url().'ContactUs');
		}

	}
	public function kirim_kritiksaran_home(){
		$data['nama_kritik_saran']=$this->input->post('username');
		$data['email_kritik_saran']=$this->input->post('email');
		$data['isi_kritik_saran']=$this->input->post('isi');
		$data['id_status_dibaca'] = 1;
		$up = $this->M_alamin->insert('kritik_saran', $data);
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di kirim ke admin"));
		header('location:'.base_url().'Home');
		}else{
			$this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di kirim, cek isi dan koneksi anda"));
			header('location:'.base_url().'Home');
		}
	}
}
