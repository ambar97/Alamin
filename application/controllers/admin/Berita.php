<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_alamin');
		$this->load->model('core');
	}
	public function index()
	{
		$data['berita']=$this->M_alamin->select("informasi");
		$this->load->view('admin/v_berita', $data);
	}
	public function t_berita(){
		$this->load->view('admin/validation/t_berita');
	}

	public function i_berita(){
		$config['upload_path']          = 'gallery/Informasi';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		$this->load->helper('date');

		if ( $this->upload->do_upload('gambar_informasi'))
		{
			$data = $this->upload->data();
			$name_file=$data['file_name'];
			$datainsert['gambar_informasi'] = $name_file;
			$judul = $this->input->post('judul_informasi');
			$isi = $this->input->post('judul_informasi');
			$now = date('y-m-d');
			$datee['date'] = $now;
			$foto = "gallery/Informasi/".$upload_data['file_name'];
			$data = array('id_informasi'=>"",
				'judul_informasi'=>$judul,
				'isi_informasi'=>$isi,
				'gambar_informasi'=>$foto);
			$upload = $this->M_alamin->insert('informasi', $data);
		}
		if ($upload >= 0) {
			$this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
		redirect(base_url().'admin/Berita');
		}else{
			$this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
		redirect(base_url().'admin/Berita');
		}

	}

	public function e_berita(){
		$config = array('upload_path' => './gallery/Informasi/',
			'allowed_types' => 'gif|jpg|png|jpeg'
		);
		$this -> load -> library ('upload',$config);
		$this->upload->do_upload('gambar_informasi');
		$upload_data = $this -> upload -> data ();
		$id_info = $this->input->post('id_informasi');
		$where['id_informasi'] = $id_info;
		$isi = $this->input->post('isi_informasi');
		$judul = $this->input->post('judul_informasi');
		$now = date('Y-m-d H:i:s');
		$date = $now;
		$foto = "gallery/Informasi/".$upload_data['file_name'];
		if ($upload_data['file_name'] == null) {
			$data = array('id_informasi' =>$id_info ,
			'isi_informasi' => $isi,
			'judul_informasi'=>$judul,
			'date'=>$now );
		}else{
			$data = array('id_informasi' =>$id_info ,
			'isi_informasi' => $isi,
			'judul_informasi'=>$judul,
			'date'=>$now,
			'gambar_informasi'=>$foto );
		}
		$upload = $this->M_alamin->update('informasi', $data, $where);
		if ($upload >= 0) {
			$this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
		redirect(base_url().'admin/Berita');
		}else{
			$this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
		redirect(base_url().'admin/Berita');
		}

	}

	public function d_berita(){
		$id = $this->uri->segment(4);
		$data['d_berita'] = $this->db->query("SELECT * FROM informasi WHERE id_informasi = '$id'");
		$this->load->view('admin/validation/e_berita', $data);
	}

	public function delete_berita(){
		$id=$this->uri->segment(4);
		$deletebyid=array('id_informasi'=>$id);
		$this->M_alamin->delete($deletebyid, 'informasi');
		header('location:'.base_url().'admin/Berita');
	}
}
// asdasdasd
