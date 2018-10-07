<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{
		// if(!$this->session->userdata('status') == 'login'){
  //     	redirect('LoginAdmin');
  //   	}else{
		$data['sejarah']=$this->M_alamin->select("sejarah");
		$data['vmt']=$this->M_alamin->select("visi_misi");
		$data['sjrh']=$this->M_alamin->select("sejarah");
		$this->load->view('admin/v_dashboard',$data);
		// }
	}
	public function e_visi(){
		$id=$this->input->post('id');
		// $where= array('no'=>$id);
		$where= array('id_visi_misi'=>$id);
		$data['visi']=$this->input->post('visi');
		$data['misi']=$this->input->post('misi');
		$data['tujuan']=$this->input->post('tujuan');
		$res = $this->M_alamin->update('visi_misi',$data,$where);
		if ($res >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/Dashboard');
		} else {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Gagal di simpan"));
			header('location:'.base_url().'admin/Dashboard');
		}
	}
	public function e_sejarah(){
		$id=$this->input->post('id');
		// $where= array('no'=>$id);
		$where= array('id_visi_misi'=>$id);
		$data['visi']=$this->input->post('visi');
		$data['misi']=$this->input->post('misi');
		$data['tujuan']=$this->input->post('tujuan');
		$res = $this->M_alamin->update('visi_misi',$data,$where);
		if ($res >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/Dashboard');
		} else {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Gagal di simpan"));
			header('location:'.base_url().'admin/Dashboard');
		}

	}
	public function e_sejarah(){
		$id['id_visi_misi']=$this->input->post('id_visi_misi');
		$data['judul_sejarah'] = $this->input->post('judul_sejarah');
		$data['isi_sejarah'] = $this->input->post('isi_sejarah');
		$data['gambar_sejarah'] = $this->input->post('gambar_sejarah');
		$this->M_alamin->update('sejarah', $data, $id);
		header('location:'.base_url().'admin/Dashboard');
	}
}
