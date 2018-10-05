<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller {
function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{
		$this->load->view('admin/v_login_adm');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$paasmd = md5($this->input->post('password'));
		$where = array(
			'username_admin' => $username,
			'password_admin' => $paasmd, 
		);
		
		$cek = $this->M_alamin->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 			
			$this->session->set_userdata($data_session);
			redirect(base_url("admin/Dashboard"));
			$this->session->set_flashdata("Pesan",$this->core->alert_succes("Login sukses"));
		}else{
			$this->session->set_flashdata("Pesan",$this->core->alert_time("Username & Password tidak terdaftar"));
			redirect(base_url("Loginadmin"));
		}
	}
}
