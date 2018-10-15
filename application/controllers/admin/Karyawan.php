<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_alamin');
        $this->load->model('core');
    }
	public function index()
	{

		$data['karyaw']=$this->M_alamin->select_multy();
		$data['bidang']=$this->M_alamin->select('bidang');
		$data['jabatan']=$this->M_alamin->select('jabatan_karyawan');
		$this->load->view('admin/v_karyawan',$data);
	}
	
	public function t_karyawan(){
        if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/Karyawan/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar')){
            $upload_data = $this -> upload -> data ();
            $Nipa = $this -> input -> post ('nipa_k');
            $nama_k = $this -> input -> post ('nama_k');
            $jabatan_k = $this -> input -> post ('jabatan_k');
            $bidang_k = $this -> input -> post ('bidang_k');
            $alamat_k = $this -> input -> post ('alamat_k');
            $TL_k = $this -> input -> post ('tl_k');
            $tempat_k = $this -> input -> post ('tempat_k');
            $foto = "gallery/Karyawan/".$upload_data['file_name'];
            $data = array(
             'NIPA_karyawan' => $Nipa,
             'nama_karyawan' => $nama_k,
             'id_jabatan' => $jabatan_k,
             'id_bidang' => $bidang_k,
             'alamat' => $alamat_k,
             'tanggal_lahir_karyawan' => $TL_k,
             'tempat_lahir_karyawan' => $tempat_k,
             'gambar_karyawan' => $foto);
            $insert_data = $this->db->insert('karyawan',$data);
            }
            if ($insert_data) {
                $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
                redirect(base_url().'admin/Karyawan');
            } else{
                $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di simpan"));
                redirect(base_url().'admin/Karyawan');
            }
        }else{
            $this->session->set_flashdata("Pesan",$this->core->alert_time("gagal upload"));
            redirect(base_url().'admin/Karyawan');
        }
    }
    

    public function d_karyawan($id){
    $where = array('NIPA_karyawan'=>$id);
    $hapus = $this->M_alamin-> delete($where,'karyawan');
    if($hapus){
    	$this->session->set_flashdata("Pesan",$this->core->alert_succes("Berhasil di Hapus"));
    header('location:'.base_url('admin/Karyawan')); 
    }else{
      header('location:'.base_url('admin/Karyawan'));
      $this->session->set_flashdata("Pesan",$this->core->alert_time("gagal upload"));
    }
    }

    public function e_karyawan(){
      $data['karyaw']=$this->M_alamin->select_multy();
    $data['bidang']=$this->M_alamin->select('bidang');
    $data['jabatan']=$this->M_alamin->select('jabatan_karyawan');
    $this->load->view('admin/validation/e_karyawan',$data);
    }
    public function aksi_edit(){
      // $id=$this->uri->segment(4);
    $config = array('upload_path' => './gallery/Karyawan/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar')){
            $upload_data = $this -> upload -> data ();
            $id=$this->uri->segment(4);
            $id_karyawan = $this->input->post('id_karyawan');
            $Nipa = $this -> input -> post ('nipa_k');
            $nama_k = $this -> input -> post ('nama_k');
            $jabatan_k = $this -> input -> post ('jabatan_k');
            $bidang_k = $this -> input -> post ('bidang_k');
            $alamat_k = $this -> input -> post ('alamat_k');
            $TL_k = $this -> input -> post ('tl_k');
            $tempat_k = $this -> input -> post ('tempat_k');
            $foto = "gallery/Karyawan/".$upload_data['file_name'];
            $data = array(
             'NIPA_karyawan' => $Nipa,
             'nama_karyawan' => $nama_k,
             'id_jabatan' => $jabatan_k,
             'id_bidang' => $bidang_k,
             'alamat' => $alamat_k,
             'tanggal_lahir_karyawan' => $TL_k,
             'tempat_lahir_karyawan' => $tempat_k,
             'gambar_karyawan' => $foto);
            $update_data = $this->db->update('karyawan',$data,$id);
            }
            if ($update_data) {
              $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
                redirect(base_url().'admin/Karyawan');
            } else{
                $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di simpan"));
                redirect(base_url().'admin/Karyawan');
            }
        // }else{
        //     $this->session->set_flashdata("Pesan",$this->core->alert_time("gagal upload"));
        //     redirect(base_url().'admin/Karyawan');
        // }

  }
}
