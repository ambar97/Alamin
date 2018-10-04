<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterAdmin extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('core');
        $this->load->model('M_alamin');
    }

	public function index()
	{
		$this->load->view('admin/v_register_adm');
	}
	public function buat(){
		if(isset($_POST['btnSimpan'])){
        $NIPA = $this -> input -> post ('nipa');
       	$username = $this -> input -> post ('username');
        $pass = $this -> input -> post ('pass');
        $data = array(
        'karyawan_NIPA_karyawan'=>$NIPA,
        'username_admin'=>$username,
        'password_admin'=>md5($pass)
        );
        $insert_data = $this->db->insert('admin',$data);
      if ($insert_data) {
      	$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
        header('location:'.base_url("Loginadmin"));
       } else{
       $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di simpan"));
       header('location:'.base_url("Loginadmin"));
       }
    }else{
      echo "gagal";
    }

  }	
}
