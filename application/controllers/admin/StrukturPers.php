<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturPers extends CI_Controller {

	public function index(){
		// $this->load->view('admin/v_sarpras');
	}
	function Kepsek(){
		$data['kepsek'] = $this->M_alamin->struktur_kepsek();
		$data['viewKepsek'] = $this->M_alamin->selectwhere('proker', array('id_bidang'=>1, 'id_jabatan'=>1));
		$this->load->view('admin/v_kepsek', $data);
	}

	function TataUsaha(){
		$this->load->view('admin/v_tata_usaha');
	}

	function Kesiswaan(){
		$this->load->view('admin/v_kesiswaan');
	}

	function Kurikulum(){
		$this->load->view('admin/v_kurikulum');
	}

	function SarprasHum(){
		$this->load->view('admin/v_sarpras_humas');
	}

	function editProkerKepsek(){
		$dataBidang = $this->input->post('id_bidangKepsek');
		$dataJabatan = $this->input->post('id_jabatanKepsek');
		$data['isi_proker'] = $this->input->post('prokerKepsek');
		$this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang, 'id_jabatan'=>$dataJabatan));
		header('location:'.base_url().'admin/StrukturPers/Kepsek');
	}

}
