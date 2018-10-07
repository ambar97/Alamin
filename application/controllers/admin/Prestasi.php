<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
	function __construct()
    {
	parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('Core');
    }

	public function index()
	{

		$data['prestasi']=$this->M_alamin->select_prestasi();
		$this->load->view('admin/v_prestasi',$data);
	}
	public function t_prestasi(){
		$nama_s = $this -> input -> post ('nm_siswa');
        $jauara_p = $this -> input -> post ('juara_p');
        $nm_lomba = $this -> input -> post ('nm_lomba');
        $kategori_j = $this -> input -> post ('kategori_juara');
        $nm_bim = $this -> input -> post ('nm_bimbing');
        $foto = $_FILES['photo']['name'];

        if ($foto='') {} else {
        	$config['upload_path']='./galery/prestasi';
        	$config['alowed_types']='jpg|gif|png';

        	$this->load->library('upload',$config);
        	if ($this->upload->do_upload('foto')) {
        		$this->session->set_flashdata("Pesan",$this->core->alert_time("gagal upload"));
        	} else {
        		$foto = $this->upload->data('file_name');
        	}
        	$data = array(
				'NIPA_karyawan' => $Nipa,
				'nama_karyawan' => $nama_k,
				'id_jabatan' => $jabatan_k,
				'id_bidang' => $bidang_k,
				'alamat' => $alamat_k,
				'tanggal_lahir_karyawan' => $TL_k,
				'tempat_lahir_karyawan' => $tempat_k,
				'gambar_karyawan' => $foto
				);
        	$this->M_alamin->insert('karyawan',$data);
        	$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
        	redirect(base_url().'admin/Karyawan');
        }
	}
}
