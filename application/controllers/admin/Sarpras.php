<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarpras extends CI_Controller {
	function __construct()
    {
	parent::__construct();
        $this->load->model('M_alamin');
    }

	public function index()
	{
		$data['sarana']=$this->M_alamin->get_sarpras();
		$this->load->view('admin/v_sarpras',$data);
	}

	public function create(){
        if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/Sarana_Prasarana/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar_sarpras'))
        {
            $upload_data = $this -> upload -> data ();
            $judul = $this -> input -> post('keterangan_sarana');
            $foto = "gallery/Sarana_Prasarana/".$upload_data['file_name'];
        $data = array(
        'ket_sarana_prasarana' => $judul,
        'gambar_sarana' => $foto
        );
        $insert_data = $this->db->insert('sarana_prasarana',$data);
      }
      if ($insert_data) {
        redirect(base_url().'admin/Sarpras');
       } else{
        echo "string";
       }
    }else{
      echo "gagal";
    }
  }
  public function hapus($id){
    $where = array('id_sarana_prasarana'=>$id);
    $hapus = $this -> M_alamin -> delete($where,'sarana_prasarana');
    if($hapus){
    header('location:'.base_url('index.php/admin/Sarpras')); 
    }else{
      header('location:'.base_url('index.php/admin/Sarpras'));
      echo "gagal";
    }
  }

}
