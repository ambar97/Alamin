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

	public function d_kalendar()
	{
		$id=$this->uri->segment(4);
		$data['detail']= $this->db->query("SELECT * FROM agenda WHERE id_agenda='$id'");
	 	$this->load->view('admin/validation/e_kalendar',$data);
	}

	public function delete_kalendar(){
		$id=$this->uri->segment(4);
		$deletebyid=array('id_agenda'=>$id);
		$this->M_alamin->delete($deletebyid, 'agenda');
		header('location:'.base_url().'admin/Kalendar');
	}
}
