<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KritikSaran extends CI_Controller {

	public function index()
	{
		$data['kritiksaran'] = $this->M_alamin->select('kritik_saran');
		$this->load->view('admin/v_kritik_saran',$data);
	}
	public function hapus($id){
    $where = array('id_kritik_saran'=>$id);
    $hapus = $this -> M_alamin -> delete($where,'kritik_saran');
    if($hapus){
    header('location:'.base_url('admin/KritikSaran')); 
    }else{
      header('location:'.base_url('admin/KritikSaran'));
      echo "gagal";
    }
  }
}
