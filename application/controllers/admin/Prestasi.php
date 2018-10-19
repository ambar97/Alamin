<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
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
		$data['prestasi']=$this->M_alamin->select_prestasi();
        $data['juara']=$this->M_alamin->select('kategori_juara');
        $data['lingkup']=$this->M_alamin->select('lingkup_prestasi');
		$this->load->view('admin/v_prestasi',$data);
	}
}
	public function t_prestasi(){
        if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/prestasi/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar'))
        {
        $upload_data = $this -> upload -> data ();
        $nama_s = $this -> input -> post ('nm_siswa');
        $juara_p = $this -> input -> post ('juara_p');
        $nm_lomba = $this -> input -> post ('nm_lomba');
        $kategori_j = $this -> input -> post ('kategori_juara');
        $nm_bim = $this -> input -> post ('nm_bimbing');
        $foto = "gallery/prestasi/".$upload_data['file_name'];
        $data = array(
        'id_prestasi' => "",
        'nama_siswa_prestasi' => $nama_s,
        'id_juara' => $juara_p,
        'id_lingkup_prestasi' => $kategori_j,
        'nama_lomba' => $nm_lomba,
        'nama_pembimbing_lomba' => $nm_bim,
        'gambar_prestasi' => $foto
        );
        $insert_data = $this->db->insert('prestasi',$data);
      }
      if ($insert_data) {
        $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'admin/Prestasi');
       } else{
         $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di simpan"));
        // redirect(base_url().'admin/Prestasi');
       }
    }else{
       $this->session->set_flashdata("Pesan",$this->core->alert_time("gagal upload, cek data & ukuran gambar"));
       // redirect(base_url().'admin/Prestasi');
    }
	}

  public function hapus($id){
     $where = array('id_prestasi'=>$id);
    $hapus = $this->M_alamin-> delete($where,'prestasi');
    if($hapus >= 0){
      $this->session->set_flashdata("Pesan",$this->core->alert_succes("Berhasil di Hapus"));
    header('location:'.base_url('admin/Prestasi')); 
    }else{
      header('location:'.base_url('admin/Prestasi'));
      $this->session->set_flashdata("Pesan",$this->core->alert_time("gagal upload"));
    }
  }
  public function e_pres(){
    $id=$this->uri->segment(4);
    $data['prestasi']=$this->M_alamin->select_ae($id);
    $data['juara']=$this->M_alamin->select('kategori_juara');
    $data['lingkup']=$this->M_alamin->select('lingkup_prestasi');
    $this->load->view('admin/validation/e_prestasi',$data);
  }
// edit data proses
  public function proses(){
    $config = array('upload_path' => './gallery/prestasi/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
        $this->upload->do_upload('gambar');
        $upload_data = $this -> upload -> data ();
        $id=$this->uri->segment(4);
        $id_pres= $this->input->post('id_prestasi');
        $where['id_prestasi']= $id_pres;
        $nama_s = $this -> input -> post ('nm_siswa');
        $juara_p = $this -> input -> post ('juara_p');
        $nm_lomba = $this -> input -> post ('nm_lomba');
        $kategori_j = $this -> input -> post ('kategori_juara');
        $nm_bim = $this -> input -> post ('nm_bimbing');
        $foto = "gallery/prestasi/".$upload_data['file_name'];
        if ($upload_data['file_name'] == null) {
        $data = array(
        'id_prestasi' => $id_pres,
        'nama_siswa_prestasi' => $nama_s,
        'id_juara' => $juara_p,
        'id_lingkup_prestasi' => $kategori_j,
        'nama_lomba' => $nm_lomba,
        'nama_pembimbing_lomba' => $nm_bim
        );
        }else{
        $data = array(
        'id_prestasi' => $id_pres,
        'nama_siswa_prestasi' => $nama_s,
        'id_juara' => $juara_p,
        'id_lingkup_prestasi' => $kategori_j,
        'nama_lomba' => $nm_lomba,
        'nama_pembimbing_lomba' => $nm_bim,
        'gambar_prestasi' => $foto
        );
        }
        $insert_data = $this->db->update('prestasi',$data,$where);
        if ($insert_data) {
        $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'admin/Prestasi');
        } else{
         $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di simpan"));
        // redirect(base_url().'admin/Prestasi');
       }
  }
}
