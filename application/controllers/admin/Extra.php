<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extra extends CI_Controller {

	public function index()
	{
		$data['ekstra'] = $this->M_alamin->select('ekstrakurikuler');
		$this->load->view('admin/v_extrakulikuler',$data);
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
	  if ($insert_data) {
	    redirect(base_url().'admin/Extra');
	   } else{
	    echo "string";
	   }
	}else{
	  echo "gagal";
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
		  if ($insert_data) {
		    redirect(base_url().'admin/Extra');
		   } else{
		    echo "string";
		   }
		}else{
		  echo "gagal";
		}
	}

	// hapus

  public function hapus($id){
    $where = array('id_ekstrakurikuler'=>$id);
    $hapus = $this -> M_alamin -> delete($where,'ekstrakurikuler');
    if($hapus){
    header('location:'.base_url('admin/Extra')); 
    }else{
      header('location:'.base_url('admin/Extra'));
      echo "gagal";
    }
  }

}
