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
		$data['karyawan']=$this->M_alamin->dashboard_karyawan();
		$data['prestasi']=$this->M_alamin->dashboard_prestasi();
		$data['berita']=$this->M_alamin->dashboard_berita();
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
	// public function e_sejarah(){
	// 	$id=$this->input->post('id');
	// 	// $where= array('no'=>$id);
	// 	$where= array('id_visi_misi'=>$id);
	// 	$data['visi']=$this->input->post('visi');
	// 	$data['misi']=$this->input->post('misi');
	// 	$data['tujuan']=$this->input->post('tujuan');
	// 	$res = $this->M_alamin->update('visi_misi',$data,$where);
	// 	if ($res >= 0) {
	// 		$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
	// 		header('location:'.base_url().'admin/Dashboard');
	// 	} else {
	// 		$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Gagal di simpan"));
	// 		header('location:'.base_url().'admin/Dashboard');
	// 	}

	// }
	public function e_sej(){
		$config['upload_path']          = 'gallery/Sejarah';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if ( $this->upload->do_upload('img_sejarah'))
		{
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$dataupdate['gambar_sejarah'] = $name_file;
						$id['id_sejarah'] = $this->input->post('id_sejarah');
						$dataupdate['judul_sejarah'] = $this->input->post('judul_sejarah');
						$dataupdate['isi_sejarah'] = $this->input->post('isi_sejarah');
						$this->M_alamin->update('sejarah', $dataupdate, $id);
		}


		header('location:'.base_url().'admin/Dashboard');
	}
}
