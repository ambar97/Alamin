<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalendar extends CI_Controller {

	public function index()
	{
		$data['agenda'] = $this->M_alamin->select('agenda');
		$this->load->view('admin/v_kalendar', $data);
	}

	public function i_kalendar(){
		$data['tanggal_agenda']=$this->input->post('tanggal_akademik');
		$data['nama_kegiatan']=$this->input->post('kegiatan_akademik');
		$this->M_alamin->insert('agenda', $data);
		header('location:'.base_url().'admin/Kalendar');
	}

	public function e_kalendar(){
		$id = $this->input->post('id_agenda');
		$data['tanggal_agenda']=$this->input->post('tanggal_akademik');
		$data['nama_kegiatan']=$this->input->post('kegiatan_akademik');
		$this->M_alamin->update('agenda', $data);
		header('location:'.base_url().'admin/Kalendar');
	}
}
