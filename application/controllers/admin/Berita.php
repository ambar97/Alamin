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
						$datainsert['judul_informasi']=$this->input->post('judul_informasi');
						$datainsert['isi_informasi']=$this->input->post('isi_informasi');
						$now = date('y-m-d');
						$datainsert['date'] = $now;
						$this->M_alamin->insert('informasi', $datainsert);
		}
		header('location:'.base_url().'admin/Berita');
	}

	public function e_berita(){
		$config['upload_path']          = 'gallery/Informasi';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if ( $this->upload->do_upload('gambar_informasi'))
		{
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$datainsert['gambar_informasi'] = $name_file;
						$id=$this->uri->segment(4);
						$now = date('Y-m-d H:i:s');
						$datainsert['judul_informasi']=$this->input->post('judul_informasi');
						$datainsert['isi_informasi']=$this->input->post('isi_informasi');
						$datainsert['date'] = $now;
						$this->M_alamin->update('informasi', $datainsert);
		}
		header('location:'.base_url().'admin/Berita');
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
