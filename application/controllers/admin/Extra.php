<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extra extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{
		if(!$this->session->userdata('status') == 'login'){
			redirect('LoginAdmin');
		}else{
		$data['ekstra'] = $this->M_alamin->select('ekstrakurikuler');
		$this->load->view('admin/v_extrakulikuler',$data);
	}
}

	public function edit_view(){
		$id=$this->uri->segment(4);
		$data['edit_eks'] = $this->M_alamin->selectwhere('ekstrakurikuler',array('id_ekstrakurikuler'=>$id));
		$this->load->view('admin/v_edit_ekstra',$data);
	}

	// tambah ekstrakurikuler

	public function t_ekstra(){
		if(isset($_POST['btnSimpan'])){
	      $config = array('upload_path' => './gallery/Ekstrakulikuler/',
	              'allowed_types' => 'gif|jpg|png|jpeg'
	              );
	      $this -> load -> library ('upload',$config);
	      if ($this->upload->do_upload('gambar_eks'))
	    {
	        $upload_data = $this -> upload -> data ();
	        $nm_eks = $this -> input -> post('nm_ekstra');
	        $ket_eks = $this -> input -> post('ket_ekstra');
	        $foto = "gallery/Ekstrakulikuler/".$upload_data['file_name'];
	    $data = array(
	    'nama_ekstrakurikuler' => $nm_eks,
	    'keterangan_ekstrakurikuler' => $ket_eks,
	    'gambar_ekstra' => $foto
	    );
	    $insert_data = $this->db->insert('ekstrakurikuler',$data);
	  }
	  if ($insert_data >= 0) {
	    $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
	    redirect(base_url().'admin/Extra');
	   } else{
	    $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
	    redirect(base_url().'admin/Extra');
	   }
	}
  }

  // edit extrakurikuler

  public function e_ekstra(){
		if(isset($_POST['btnSimpan'])){
		      $config = array('upload_path' => './gallery/Ekstrakulikuler/',
		              'allowed_types' => 'gif|jpg|png|jpeg'
		              );
		      $this -> load -> library ('upload',$config);
		      if ($this->upload->do_upload('gambar_eks'))
		    {
		        $upload_data = $this -> upload -> data ();
		        $id= $this->input->post('id_ekstrakurikuler');
		        $where['id_ekstrakurikuler'] = $id;
		        $nm_eks = $this -> input -> post('nm_ekstra');
		        $ket_eks = $this -> input -> post('ket_ekstra');
		        $foto = "gallery/Ekstrakulikuler/".$upload_data['file_name'];
		    $data = array(
		    'nama_ekstrakurikuler' => $nm_eks,
		    'keterangan_ekstrakurikuler' => $ket_eks,
		    'gambar_ekstra' => $foto
		    );
		    $insert_data = $this->db->update('ekstrakurikuler',$data, $where);
		  }
		  if ($insert_data >= 0) {
		   $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di perbarui"));
	    redirect(base_url().'admin/Extra');
		   } else{
		    $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di perbarui"));
	    redirect(base_url().'admin/Extra');
		   }
		}else{
		  $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Gagal di perbarui, cek ukuran gambar"));
	    redirect(base_url().'admin/Extra');
		}
	}

	// hapus

  public function hapus($id){
    $where = array('id_ekstrakurikuler'=>$id);
    $hapus = $this -> M_alamin -> delete($where,'ekstrakurikuler');
    if($hapus >= 0){
    $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di hapus"));
	    redirect(base_url().'admin/Extra');
    }else{
      $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
	    redirect(base_url().'admin/Extra');
    }
  }

}
