<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	

class Kalendar extends CI_Controller {
function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{
		if(!$this->session->userdata('status') == 'login'){
			redirect('LoginAdmin');
		}else{
		$data['agenda'] = $this->M_alamin->select('agenda');
		$this->load->view('admin/v_kalendar', $data);
	}
}

	public function i_kalendar(){
		$data['tanggal_agenda']=$this->input->post('tanggal_akademik');
		$data['nama_kegiatan']=$this->input->post('kegiatan_akademik');
		$up = $this->M_alamin->insert('agenda', $data);
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/Kalendar');
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/Kalendar');
		}
	}

	public function e_kalendar(){

		$id= $this->input->post('id_agenda');
		$where['id_agenda'] = $id;
		$data['tanggal_agenda']=$this->input->post('tanggal_akademik');
		$data['nama_kegiatan']=$this->input->post('kegiatan_akademik');
		$up = $this->M_alamin->update('agenda', $data, $where);
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di perbarui"));
			header('location:'.base_url().'admin/Kalendar');
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di perbarui"));
			header('location:'.base_url().'admin/Kalendar');
		}
		
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
		$up = $this->M_alamin->delete($deletebyid, 'agenda');
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di hapus"));
			header('location:'.base_url().'admin/Kalendar');
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di hapus"));
			header('location:'.base_url().'admin/Kalendar');
		}
		
	}
}
