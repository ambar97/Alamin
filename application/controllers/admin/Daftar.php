<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('core');
        $this->load->model('M_alamin');
    }

	public function index()
	{
    if(!$this->session->userdata('status') == 'login'){
      redirect('LoginAdmin');
    }else{
    $data['admin']=$this->M_alamin->select_admin();
    $data['kar']=$this->M_alamin->select('karyawan');
		$this->load->view('admin/v_register_adm',$data);
	}
}
	public function buat(){
		if(isset($_POST['btnSimpan'])){
        $NIPA = $this -> input -> post ('nipa');
       	$username = $this -> input -> post ('username');
        $pass = $this -> input -> post ('password');
        $data = array(
        'karyawan_NIPA_karyawan'=>$NIPA,
        'username_admin'=>$username,
        'password_admin'=>md5($pass)
        );
        $insert_data = $this->db->insert('admin',$data);
      if ($insert_data >= 0) {
      	$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
        header('location:'.base_url("admin/Daftar"));
       } else{
       $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di simpan"));
       header('location:'.base_url("admin/Daftar"));
       }
    }else{
      echo "gagal";
    }

  }	
  function hapus($id){
    $where = array('id_admin'=>$id);
    $hapus = $this -> M_alamin -> delete($where,'admin');
    if($hapus >= 0){
    $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di hapus"));
      redirect(base_url().'admin/Daftar');
    }else{
      $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
      redirect(base_url().'admin/Daftar');
    }
  }
}
