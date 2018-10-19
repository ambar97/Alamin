<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KritikSaran extends CI_Controller {
function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{
		$data['kritiksaran'] = $this->M_alamin->select('kritik_saran');
		$this->load->view('admin/v_kritik_saran',$data);
	}
	public function hapus($id){
    $where = array('id_kritik_saran'=>$id);
    $hapus = $this -> M_alamin -> delete($where,'kritik_saran');
    if($hapus >= 0){ 
      $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di hapus"));
    header('location:'.base_url('admin/KritikSaran')); 
    }else{
      $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Gagal di hapus"));
      header('location:'.base_url('admin/KritikSaran'));
    }
  }
}
