<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	public function index()
	{
		$data['kritiksaran'] = $this->M_alamin->select('kritik_saran');
		$this->load->view('user/v_contact',$data);
	}
	public function kirim_kritiksaran(){ 
		$data['nama_kritik_saran']=$this->input->post('username');
		$data['email_kritik_saran']=$this->input->post('email');
		$data['isi_kritik_saran']=$this->input->post('isi');
		$this->M_alamin->insert('kritik_saran', $data);
		header('location:'.base_url().'ContactUs');
	}
	public function kirim_kritiksaran_home(){ 
		$data['nama_kritik_saran']=$this->input->post('username');
		$data['email_kritik_saran']=$this->input->post('email');
		$data['isi_kritik_saran']=$this->input->post('isi');
		$this->M_alamin->insert('kritik_saran', $data);
		header('location:'.base_url().'Home');
	}
}