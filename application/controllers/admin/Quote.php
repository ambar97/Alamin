<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quote extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('M_alamin');
    $this->load->model('core');
  }

  public function index(){
    $data['nipa'] = $this->M_alamin->select('karyawan');
    $data['quote'] = $this->M_alamin->quote();
    $this->load->view('admin/v_quotes', $data);
  }

  public function insert(){
    $data['karyawan_NIPA_karyawan'] = $this->input->post('pilih_karyawan');
    $data['isi'] = $this->input->post('isi_quote');
    $this->M_alamin->insert('quotes', $data);
    header('location:'.base_url().'admin/Quote/');
  }

  public function delete(){
    $id = $this->uri->segment(4);
    $where = array('id_quotes'=>$id);
    $hapus = $this -> M_alamin -> delete($where,'quotes');
    if($hapus){
    header('location:'.base_url().'admin/Quote/');
    }else{
      header('location:'.base_url().'admin/Quote/');
      echo "gagal";
    }
  }
}
