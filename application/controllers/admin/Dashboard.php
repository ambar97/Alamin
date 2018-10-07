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
		$data['vmt']=$this->M_alamin->select("visi_misi");
		$data['sjrh']=$this->M_alamin->select("sejarah");
		$this->load->view('admin/v_dashboard',$data);
		// }
	}
	public function e_visi(){
		$id['id_visi_misi']=$this->input->post('id_visi_misi');
		$data['visi'] = $this->input->post('visi');
		$data['misi'] = $this->input->post('misi');
		$data['tujuan'] = $this->input->post('tujuan');
		$this->M_alamin->update('visi_misi', $data, $id);
		header('location:'.base_url().'admin/Dashboard');
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
