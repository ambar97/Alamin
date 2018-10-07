<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
	function __construct()
    {
	parent::__construct();
        $this->load->model('M_alamin');
    }

	public function index()
	{
		$data['prestasi']=$this->M_alamin->get_prestasi();
		$this->load->view('admin/v_prestasi');
	}
	public function create(){
        if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/Galeri/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar_galeri'))
        {
            $upload_data = $this -> upload -> data ();
            $judul = $this -> input -> post('judul_galeri');
            $isi = $this -> input -> post('deskripsi_galeri');
            $foto = "gallery/Galeri/".$upload_data['file_name'];
        $data = array(
        'judul_galeri' => $judul,
        'deskripsi_galeri' => $isi,
        'gambar_galeri' => $foto
        );
        $insert_data = $this->db->insert('galeri',$data);
      }
      if ($insert_data) {
        redirect(base_url().'admin/Galery');
       } else{
        echo "string";
       }
    }else{
      echo "gagal";
    }
  }
}
