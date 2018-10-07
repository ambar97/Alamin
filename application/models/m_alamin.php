<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alamin extends CI_Model {

    public function select($table){
    return $this->db->get($table);
  }
  public function selectlimit($table){
      $this->db->order_by('id_berita','DESC') ;
     $this->db->limit(6) ;
     return $this->db->get($table) ;
  }

  public function selectwhere($table,$data){
    return $this->db->get_where($table, $data);
  }

  function delete($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function update($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

  public function insert($table,$data){
    $this->db->insert($table,$data);
  }
  function cek_login($table,$where){
    return $this->db->get_where($table,$where);
  }

    function get_model(){
    $query = $this->db->query('SELECT * FROM automobil ORDER BY id_automobile ASC');
    return $query->result();
  }
  function select_multy(){
    $this->db->select('karyawan.*, jabatan_karyawan.*, bidang.*');
          $this->db->join('jabatan_karyawan', 'jabatan_karyawan.id_jabatan = karyawan.id_jabatan');
          $this->db->join('bidang', 'bidang.id_bidang= karyawan.id_bidang');
          $this->db->from('karyawan');
          // $this->db->where('harga.id_harga', '1');
          $data=$this->db->get();
          return $data;
  }
  function get_galery(){
      return $this->db->query('SELECT * FROM galeri ORDER BY id_galeri DESC');
      return $query->result ();
  }

  function select_prestasi(){
    $this->db->select('prestasi.*, lingkup_prestasi.*, kategori_juara.*');
          $this->db->join('lingkup_prestasi', 'lingkup_prestasi.id_lingkup_prestasi = prestasi.id_lingkup_prestasi');
          $this->db->join('kategori_juara', 'kategori_juara.id_juara= prestasi.id_juara');
          $this->db->from('prestasi');
          // $this->db->where('harga.id_harga', '1');
          $data=$this->db->get();
          return $data;
  }
}
