<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{

		$data['karyaw']=$this->M_alamin->select_multy();
		$this->load->view('admin/v_karyawan',$data);
	}
	
	public function t_karyawan(){
		$Nipa = $this -> input -> post ('nipa_k');
        $nama_k = $this -> input -> post ('nama_k');
        // $jabatan_k = $this -> input -> post ('jabatan_k');
        // $bidang_k = $this -> input -> post ('bidang_k');
        $alamat_k = $this -> input -> post ('alamat_k');
        $TL_k = $this -> input -> post ('tl_k');
        $tempat_k = $this -> input -> post ('tempat_k');
        $foto = $_FILES['gambar']['name'];

        if ($foto='') {} else {
        	$config['upload_path']='./gambar/karyawan';
        	$config['alowed_types']='jpg|gif|png';

        	$this->load->library('upload',$config);
        	if ($this->upload->do_upload('foto')) {
        		$this->session->set_flashdata("Pesan",$this->core->alert_succes("gagal upload"));
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
        	redirect(base_url().'admin/Karyawan');
        }
        
    }

}
