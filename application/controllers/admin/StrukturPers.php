<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturPers extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_alamin');
		$this->load->model('core');
	}
	public function index(){
// $this->load->view('admin/v_sarpras');
	}
	function Kepsek(){
		$data['viewKepsek'] = $this->M_alamin->selectwhere('proker', array('id_bidang'=>1));
		$this->load->view('admin/v_kepsek', $data);
	}

	function TataUsaha(){
		$data['viewTU'] = $this->M_alamin->selectwhere('proker', array('id_bidang'=>2));
		$data['viewStruktur'] = $this->M_alamin->update_struktur_tu();

		$this->load->view('admin/v_tata_usaha', $data);
	}

	function Kesiswaan(){
		$data['viewKesiswaan'] = $this->M_alamin->selectwhere('proker', array('id_bidang'=>3));
		$data['viewStruktur'] = $this->M_alamin->update_struktur_kesiswaan();
		$this->load->view('admin/v_kesiswaan', $data);
	}

	function Kurikulum(){
		$data['viewKurikulum'] = $this->M_alamin->selectwhere('proker', array('id_bidang'=>4));
		$data['viewStruktur'] = $this->M_alamin->update_struktur_kurikulum();
		$this->load->view('admin/v_kurikulum', $data);
	}

	function SarprasHum(){
		$data['viewSapras'] = $this->M_alamin->selectwhere('proker', array('id_bidang'=>5));
		$data['viewStruktur'] = $this->M_alamin->update_struktur_sapras();
		$this->load->view('admin/v_sarpras_humas', $data);
	}

	function editProkerKepsek(){
		$dataBidang = $this->input->post('id_bidangKepsek');
		$data['isi_proker'] = $this->input->post('prokerKepsek');
		$up = $this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/StrukturPers/Kepsek');
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
			header('location:'.base_url().'admin/StrukturPers/Kepsek');
		}

	}

	function editProkerTU(){
		$dataBidang = $this->input->post('id_bidangTU');
		$data['isi_proker'] = $this->input->post('proker_tu');
		$up = $this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/StrukturPers/TataUsaha');
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
			header('location:'.base_url().'admin/StrukturPers/TataUsaha');
		}
	}

	function editStrukturTU(){
		$config = array('upload_path' => './gallery/Struktur/',
      'allowed_types' => 'gif|jpg|png|jpeg'
    	);
    	$this -> load -> library ('upload',$config);
	    if($this->upload->do_upload('gambar_struktur_tu')){
	    $upload_data = $this -> upload -> data ();
	    $id_karyawan = 2;
	    $where['id_bidang']= $id_karyawan;
	    $foto = "gallery/Struktur/".$upload_data['file_name'];
    		$data = array(
    			'gambar_struktur'=>$foto);
    	$up = $this->M_alamin->update('galeri_struktur', $data,$where);
    }
    	if ($up >= 0) {
    		$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di perbarui"));
    		header('location:'.base_url().'admin/StrukturPers/TataUsaha');
    	}else{
    		$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di perbarui"));
    		header('location:'.base_url().'admin/StrukturPers/TataUsaha');
    	}
	}

	function editKesiswaan(){
		$dataBidang = $this->input->post('id_bidangKesiswaan');
		$data['isi_proker'] = $this->input->post('isi_proker_kesiswaan');
		$up = $this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/StrukturPers/Kesiswaan');
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
			header('location:'.base_url().'admin/StrukturPers/Kesiswaan');
		}
	}

	function editStrukturKesiswaan(){
		$config = array('upload_path' => './gallery/Struktur/',
      'allowed_types' => 'gif|jpg|png|jpeg'
    	);
    	$this -> load -> library ('upload',$config);
	    if($this->upload->do_upload('gambar_struktur_kesiswaan')){
	    $upload_data = $this -> upload -> data ();
	    $id_karyawan = 3;
	    $where['id_bidang']= $id_karyawan;
	    $foto = "gallery/Struktur/".$upload_data['file_name'];
    		$data = array(
    			'gambar_struktur'=>$foto);
    	$up = $this->M_alamin->update('galeri_struktur', $data,$where);
    }
    	if ($up >= 0) {
    		$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di perbarui"));
    		header('location:'.base_url().'admin/StrukturPers/Kesiswaan');
    	}else{
    		$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di perbarui"));
    		header('location:'.base_url().'admin/StrukturPers/Kesiswaan');
    	}
	}

	function editKurikulum(){
		$dataBidang = $this->input->post('id_bidangKurikulum');
		$data['isi_proker'] = $this->input->post('isi_proker_kurikulum');
		$up = $this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/StrukturPers/Kurikulum');
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
			header('location:'.base_url().'admin/StrukturPers/Kurikulum');
		}
	}

	function editStrukturKurikulum(){
		$config = array('upload_path' => './gallery/Struktur/',
      'allowed_types' => 'gif|jpg|png|jpeg'
    	);
    	$this -> load -> library ('upload',$config);
	    if($this->upload->do_upload('gambar_struktur_kurikulum')){
	    $upload_data = $this -> upload -> data ();
	    $id_karyawan = 4;
	    $where['id_bidang']= $id_karyawan;
	    $foto = "gallery/Struktur/".$upload_data['file_name'];
    		$data = array(
    			'gambar_struktur'=>$foto);
    		$up = $this->M_alamin->update('galeri_struktur', $data,$where);
    	}
    	
    	if ($up >= 0) {
    		$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di perbarui"));
    		header('location:'.base_url().'admin/StrukturPers/Kurikulum');
    	}else{
    		$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di perbarui"));
    		header('location:'.base_url().'admin/StrukturPers/Kurikulum');
    	}
	}

	function editSapras(){
		$dataBidang = $this->input->post('id_bidangSapras');
		$data['isi_proker'] = $this->input->post('isi_proker_sapras');
		$up = $this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		if ($up >= 0) {
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
			header('location:'.base_url().'admin/StrukturPers/SarprasHum');
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
			header('location:'.base_url().'admin/StrukturPers/SarprasHum');
		}
	}

	function editStrukturSapras(){
		$config = array('upload_path' => './gallery/Struktur/',
      'allowed_types' => 'gif|jpg|png|jpeg'
    	);
    	$this -> load -> library ('upload',$config);
	    if($this->upload->do_upload('gambar_struktur_sapras')){
	    $upload_data = $this -> upload -> data ();
	    $id_karyawan = 5;
	    $where['id_bidang']= $id_karyawan;
	    $foto = "gallery/Struktur/".$upload_data['file_name'];
    		$data = array(
    			'gambar_struktur'=>$foto);
    		$up = $this->M_alamin->update('galeri_struktur', $data,$where);
    	}
    	
    	if ($up >= 0) {
    		$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di perbarui"));
    		header('location:'.base_url().'admin/StrukturPers/SarprasHum');
    	}else{
    		$this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di perbarui"));
    		header('location:'.base_url().'admin/StrukturPers/SarprasHum');
    	}

		// $config['upload_path']          = 'gallery/Struktur';
		// $config['allowed_types']        = 'gif|jpg|png';
		// $this->load->library('upload', $config);
		// if ( $this->upload->do_upload('gambar_struktur_sapras'))
		// {
		// 	$data = $this->upload->data();
		// 	$name_file=$data['file_name'];
		// 	$update_data['gambar_struktur'] = $name_file;
		// 	$dataBidang = 5;
		// 	$this->M_alamin->update('galeri_struktur', $update_data, array('id_bidang'=>$dataBidang));
		// 	header('location:'.base_url().'admin/StrukturPers/SarprasHum');
		// }
	}



}
