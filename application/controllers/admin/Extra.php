<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extra extends CI_Controller {

	public function index()
	{
		$data['ekstra'] = $this->M_alamin->select('ekstrakurikuler');
		$this->load->view('admin/v_extrakulikuler',$data);
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
		$config['upload_path']          = 'gallery/Ekstrakulikuler';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if ( $this->upload->do_upload('gambar_eks'))
		{
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$dataupdate['gambar_ekstra'] = $name_file;
						$id['id_ekstrakurikuler'] = $this->input->post('id_ekstrakurikuler');
						$dataupdate['nama_ekstrakurikuler'] = $this->input->post('nm_ekstra');
						$dataupdate['keterangan_ekstrakurikuler'] = $this->input->post('ket_ekstra');
						$this->M_alamin->update('ekstrakurikuler', $dataupdate, $id);
		}
		header('location:'.base_url().'admin/Extra');
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
