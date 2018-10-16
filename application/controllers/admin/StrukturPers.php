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
		$data['tatausaha'] = $this->M_alamin->struktur_tatausaha();
		$data['viewTU'] = $this->M_alamin->selectwhere('proker', array('id_bidang'=>2, 'id_jabatan'=>7));
		$this->load->view('admin/v_tata_usaha', $data);
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

	function editProkerTU(){
		$config['upload_path']          = 'gallery/Struktur';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if ( $this->upload->do_upload('gambar_struktur_tu'))
                {
												$data = $this->upload->data();
												$name_file=$data['file_name'];
												$update_data['gambar_struktur'] = $name_file;
												$id_mobil=$this->input->post('id_mobil');
												$this->suzuki_model->update('mobil', $update_data, array('id_mobil'=>$id_mobil));
                        header('location:'.base_url('admin/Product/editData/'.$id_mobil));
                }

		$dataBidang = $this->input->post('id_bidangTU');
		$dataJabatan = $this->input->post('id_jabatanTU');
		$data['isi_proker'] = $this->input->post('proker_tu');
		$this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang, 'id_jabatan'=>$dataJabatan));
		header('location:'.base_url().'admin/StrukturPers/TataUsaha');
	}

}
