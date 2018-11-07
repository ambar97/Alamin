<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
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
		$this->load->view('admin/v_profile');
	}
}
public function e_user(){

                $id= $this->input->post("id_admin");
                $where['id_admin'] = $id;
                $nm_admin = $this -> input -> post('username');
            $data = array(
            'username_admin' => $nm_admin
            );
            $insert_data = $this->db->update('admin',$data, $where);
          if ($insert_data >= 0) {
           $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di perbarui"));
        redirect(base_url().'admin/Profile');
           } else{
            $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di perbarui"));
        redirect(base_url().'admin/Profile');
           }
    }
    public function e_pass(){

                $id= $this->input->post("id_admin");
                $where['id_admin'] = $id;
                $ps_admin = md5($this -> input -> post('password'));
            $data = array(
            'password_admin' => $ps_admin
            );
            $insert_data = $this->db->update('admin',$data, $where);
          if ($insert_data >= 0) {
           $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di perbarui"));
        redirect(base_url().'admin/Profile');
           } else{
            $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di perbarui"));
        redirect(base_url().'admin/Profile');
           }
    }
}
