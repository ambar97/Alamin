<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturPers extends CI_Controller {

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
		$this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		header('location:'.base_url().'admin/StrukturPers/Kepsek');
	}

	function editProkerTU(){
		$dataBidang = $this->input->post('id_bidangTU');
		$data['isi_proker'] = $this->input->post('proker_tu');
		$this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		header('location:'.base_url().'admin/StrukturPers/TataUsaha');
	}

	function editStrukturTU(){
		$config['upload_path']          = 'gallery/Struktur';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if ( $this->upload->do_upload('gambar_struktur_tu'))
                {
												$data = $this->upload->data();
												$name_file=$data['file_name'];
												$update_data['gambar_struktur'] = $name_file;
												$dataBidang = 2;
												$this->M_alamin->update('galeri_struktur', $update_data, array('id_bidang'=>$dataBidang));
                        header('location:'.base_url().'admin/StrukturPers/TataUsaha');
                }
	}

	function editKesiswaan(){
		$dataBidang = $this->input->post('id_bidangKesiswaan');
		$data['isi_proker'] = $this->input->post('isi_proker_kesiswaan');
		$this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		header('location:'.base_url().'admin/StrukturPers/Kesiswaan');
	}

	function editStrukturKesiswaan(){
		$config['upload_path']          = 'gallery/Struktur';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if ( $this->upload->do_upload('gambar_struktur_kesiswaan'))
                {
												$data = $this->upload->data();
												$name_file=$data['file_name'];
												$update_data['gambar_struktur'] = $name_file;
												$dataBidang = 3;
												$this->M_alamin->update('galeri_struktur', $update_data, array('id_bidang'=>$dataBidang));
                        header('location:'.base_url().'admin/StrukturPers/Kesiswaan');
                }
	}

	function editKurikulum(){
		$dataBidang = $this->input->post('id_bidangKurikulum');
		$data['isi_proker'] = $this->input->post('isi_proker_kurikulum');
		$this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		header('location:'.base_url().'admin/StrukturPers/Kurikulum');
	}

	function editStrukturKurikulum(){
		$config['upload_path']          = 'gallery/Struktur';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if ( $this->upload->do_upload('gambar_struktur_kurikulum'))
                {
												$data = $this->upload->data();
												$name_file=$data['file_name'];
												$update_data['gambar_struktur'] = $name_file;
												$dataBidang = 4;
												$this->M_alamin->update('galeri_struktur', $update_data, array('id_bidang'=>$dataBidang));
                        header('location:'.base_url().'admin/StrukturPers/Kurikulum');
                }
	}

	function editSapras(){
		$dataBidang = $this->input->post('id_bidangSapras');
		$data['isi_proker'] = $this->input->post('isi_proker_sapras');
		$this->M_alamin->update('proker', $data, array('id_bidang' => $dataBidang));
		header('location:'.base_url().'admin/StrukturPers/SarprasHum');
	}

	function editStrukturSapras(){
		$config['upload_path']          = 'gallery/Struktur';
								$config['allowed_types']        = 'gif|jpg|png';
								$this->load->library('upload', $config);
								if ( $this->upload->do_upload('gambar_struktur_sapras'))
								{
												$data = $this->upload->data();
												$name_file=$data['file_name'];
												$update_data['gambar_struktur'] = $name_file;
												$dataBidang = 5;
												$this->M_alamin->update('galeri_struktur', $update_data, array('id_bidang'=>$dataBidang));
												header('location:'.base_url().'admin/StrukturPers/SarprasHum');
								}
	}



}
