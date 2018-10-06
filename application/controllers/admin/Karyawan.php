<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function index()
	{
		$data['karyaw']=$this->M_alamin->select_multy();
		$this->load->view('admin/v_karyawan',$data);
	}
	public function t_karyawan(){
		if(isset($_POST['btnSimpan'])){
        	$config = array('upload_path' => './gallery/gambar_berita/',
        					'allowed_types' => 'gif|jpg|png|jpeg'
        					);
        	$this -> load -> library ('upload',$config);
        	if ($this->upload->do_upload('berita'))
    		{
        		$upload_data = $this -> upload -> data ();
        		$Nipa = $this -> input -> post ('judul');
        		$nama_k = $this -> input -> post ('tanggal');
        		$jabatan_k = $this -> input -> post ('isi');
        		$bidang_k = $this -> input -> post ('sumber');
        		$alamat_k = $this -> input -> post ('sumber');
        		$TL_k = $this -> input -> post ('sumber');
        		$tempat_k = $this -> input -> post ('sumber');
        		$foto = "gallery/gambar_berita/".$upload_data['file_name'];
				$data = array(
				'judul_berita' => $judul,
				'isi_berita' => $isi,
				'tgl_berita' => $tanggal,
				'sumber' => $sumber,
				'gambar_berita' => $foto
				);
				$insert_data = $this->db->insert('berita',$data);
			}
			if ($insert_data) {
				redirect(base_url().'admin/Berita');
			 } else{
				echo "string";
			 }
		}else{
			echo "gagal";
		}

    }

}
