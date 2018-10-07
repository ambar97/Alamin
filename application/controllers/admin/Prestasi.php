<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }

	public function index()
	{

		$data['prestasi']=$this->M_alamin->select_prestasi();
        $data['juara']=$this->M_alamin->select('kategori_juara');
        $data['lingkup']=$this->M_alamin->select('lingkup_prestasi');
		$this->load->view('admin/v_prestasi',$data);
	}
	public function t_prestasi(){
		$nama_s = $this -> input -> post ('nm_siswa');
        $juara_p = $this -> input -> post ('juara_p');
        $nm_lomba = $this -> input -> post ('nm_lomba');
        $kategori_j = $this -> input -> post ('kategori_juara');
        $nm_bim = $this -> input -> post ('nm_bimbing');
        $foto = $_FILES['photo']['name'];

        if ($foto='') {} else {
        	$config['upload_path']='./galery/prestasi';
        	$config['alowed_types']='jpg|gif|png';

        	$this->load->library('upload',$config);
        	if (!$this->upload->do_upload('foto')) {
        	} else {
        		$foto = $this->upload->data('file_name');
        	}
        	$data = array(
				'id_prestasi' => "",
				'nama_siswa_prestasi' => $nama_s,
				'id_juara' => $juara_p,
				'id_lingkup_prestasi' => $kategori_j,
				'nama_lomba' => $nm_lomba,
                'nama_pembimbing_lomba' => $nm_bim,
				'gambar_prestasi' => $foto
				);
        	$this->M_alamin->insert('prestasi',$data);
        	$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
        	redirect(base_url().'admin/Prestasi');
        }
	}
}
