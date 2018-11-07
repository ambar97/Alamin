<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alamin extends CI_Model {

    public function select($table){
    return $this->db->get($table);
  }
  public function selectlimit($table){
      $this->db->order_by('id_informasi','DESC') ;
     $this->db->limit(3) ;
     return $this->db->get($table) ;
  }

  public function selectlimitgallery($table){
        $this->db->order_by('id_galeri','DESC') ;
       $this->db->limit(3) ;
       return $this->db->get($table) ;
  }
  public function selectlimitberita($table){
      $this->db->order_by('id_informasi','DESC') ;
      $this->db->limit(1) ;
      $data = $this->db->get($table);
      return $data;
  }
  public function recent_berita($table){
    $this->db->order_by('id_informasi', 'DESC');
    $data = $this->db->get($table);
    return $data;
  }

  public function recent_berita_limit($table){
    $this->db->order_by('id_informasi', 'DESC');
    $this->db->limit(3) ;
    $data = $this->db->get($table);
    return $data;
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

  function select_multy(){
    $this->db->select('karyawan.*, jabatan_karyawan.*, bidang.*');
          $this->db->join('jabatan_karyawan', 'jabatan_karyawan.id_jabatan = karyawan.id_jabatan');
          $this->db->join('bidang', 'bidang.id_bidang= karyawan.id_bidang');
          $this->db->from('karyawan');
          // $this->db->where('harga.id_harga', '1');
          $data=$this->db->get();
          return $data;
  }
  function select_karyawan($id){
    $this->db->select('karyawan.*, jabatan_karyawan.*, bidang.*');
          $this->db->join('jabatan_karyawan', 'jabatan_karyawan.id_jabatan = karyawan.id_jabatan');
          $this->db->join('bidang', 'bidang.id_bidang= karyawan.id_bidang');
          $this->db->from('karyawan');
          $this->db->where('karyawan.NIPA_karyawan', $id);
          $data=$this->db->get();
          return $data;
  }
   function select_admin(){
    $this->db->select('admin.*, karyawan.*');
          $this->db->join('karyawan', 'karyawan.NIPA_karyawan = admin.karyawan_NIPA_karyawan');
          $this->db->from('admin');
          // $this->db->where('karyawan.NIPA_karyawan', $id);
          $data=$this->db->get();
          return $data;
  }
  function data_admin($id){
    $this->db->select('admin.*, karyawan.*');
          $this->db->join('karyawan', 'karyawan.NIPA_karyawan = admin.karyawan_NIPA_karyawan');
          $this->db->from('admin');
          $this->db->where('admin.id_admin', $id);
          $data=$this->db->get();
          return $data;
  }
  function get_galery(){
      return $this->db->query('SELECT * FROM galeri where id_galeri != 1 && id_galeri != 2');
      return $query->result ();
  }
  function get_ekstra(){
      return $this->db->query('SELECT * FROM ekstrakurikuler where id_galeri != 1 && id_galeri != 2');
      return $query->result ();
  }
  function get_sejarah(){
    return $this->db->query('SELECT * FROM sejarah');
      return $query->result ();
  }

  function get_sarpras(){
      return $this->db->query('SELECT * FROM sarana_prasarana ORDER BY id_sarana_prasarana DESC');
      return $query->result ();
    }

  //tampilan dashboard
        function dashboard_karyawan(){
          // get total rows
          $this->db->from('karyawan');
            return $this->db->count_all_results();
        }

        function dashboard_berita(){
          // get total rows
          $this->db->from('informasi');
            return $this->db->count_all_results();
        }

        function dashboard_prestasi(){
          // get total rows
          $this->db->from('prestasi');
            return $this->db->count_all_results();
        }

        function dashboard_video(){
          // get total rows
          $this->db->from('headline');
            return $this->db->count_all_results();
        }
  //end of tampilan dashboard

   function select_prestasi(){
    $this->db->select('prestasi.*, lingkup_prestasi.*, kategori_juara.*');
          $this->db->join('lingkup_prestasi', 'lingkup_prestasi.id_lingkup_prestasi = prestasi.id_lingkup_prestasi');
          $this->db->join('kategori_juara', 'kategori_juara.id_juara= prestasi.id_juara');
          $this->db->from('prestasi');
          // $this->db->where('harga.id_harga', '1');
          $data=$this->db->get();
          return $data;
  }
  function select_ae($id){
    $this->db->select('prestasi.*, lingkup_prestasi.*, kategori_juara.*');
          $this->db->join('lingkup_prestasi', 'lingkup_prestasi.id_lingkup_prestasi = prestasi.id_lingkup_prestasi');
          $this->db->join('kategori_juara', 'kategori_juara.id_juara= prestasi.id_juara');
          $this->db->from('prestasi');
          $this->db->where("prestasi.id_prestasi",$id);
          $data=$this->db->get();
          return $data;
  }

  function struktur_kepsek(){
    $this->db->select('karyawan.*, bidang.*');
    $this->db->from('karyawan');
    $this->db->join('bidang', 'bidang.id_bidang = karyawan.id_bidang');
    $this->db->where('karyawan.id_bidang = 1');
    $data = $this->db->get();
    return $data;
  }

  function update_struktur_tu(){
    $this->db->select('galeri_struktur.*, bidang.*');
    $this->db->from('galeri_struktur');
    $this->db->join('bidang', 'bidang.id_bidang = galeri_struktur.id_bidang');
    $where = array('galeri_struktur.id_bidang' => 2);
    $this->db->where($where);
    $data = $this->db->get();
    return $data;
  }

  function update_struktur_kesiswaan(){
    $this->db->select('galeri_struktur.*, bidang.*');
    $this->db->from('galeri_struktur');
    $this->db->join('bidang', 'bidang.id_bidang = galeri_struktur.id_bidang');
    $where = array('galeri_struktur.id_bidang' => 3);
    $this->db->where($where);
    $data = $this->db->get();
    return $data;
  }

  function update_struktur_kurikulum(){
    $this->db->select('galeri_struktur.*, bidang.*');
    $this->db->from('galeri_struktur');
    $this->db->join('bidang', 'bidang.id_bidang = galeri_struktur.id_bidang');
    $where = array('galeri_struktur.id_bidang' => 4);
    $this->db->where($where);
    $data = $this->db->get();
    return $data;
  }

  function update_struktur_sapras(){
    $this->db->select('galeri_struktur.*, bidang.*');
    $this->db->from('galeri_struktur');
    $this->db->join('bidang', 'bidang.id_bidang = galeri_struktur.id_bidang');
    $where = array('galeri_struktur.id_bidang' => 5);
    $this->db->where($where);
    $data = $this->db->get();
    return $data;
  }

  function quote(){
    $this->db->select('quotes.*, karyawan.*');
    $this->db->from('quotes');
    $this->db->join('karyawan', 'karyawan.NIPA_karyawan = quotes.karyawan_NIPA_karyawan');
    $data = $this->db->get();
    return $data;
  }

  function quote_home(){
    $this->db->select('quotes.*, karyawan.*, jabatan_karyawan.*');
    $this->db->from('quotes');
    $this->db->join('karyawan', 'karyawan.NIPA_karyawan = quotes.karyawan_NIPA_karyawan');
    $this->db->join('jabatan_karyawan', 'jabatan_karyawan.id_jabatan = karyawan.id_jabatan');
    $data = $this->db->get();
    return $data;
  }

  public function profil_guru(){
    $this->db->select('karyawan.*, jabatan_karyawan.*');
    $this->db->from('karyawan');
    $this->db->join('jabatan_karyawan', 'jabatan_karyawan.id_jabatan = karyawan.id_jabatan');
    $this->db->where(array('id_bidang' => 6));
    $data = $this->db->get();
    return $data;
  }

  // function motto_kepsek($NIPA){
  //   $this->db->select('quote.*, karyawan.*, bidang.*');
  //   $this->db->from('quote');
  //   $this->db->join('karyawan', 'quote.karyawan_NIPA_karyawan = karyawan.NIPA_karyawan');
  //   $this->db->join('bidang', 'karyawan.id_bidang = bidang.id_bidang');
  //   $this->db->where('quote.karyawan_NIPA_karyawan', $NIPA);
  //   // $this->db->where('karyawan.id_bidang', )
  //   $data = $this->db->get();
  //   return $data;
  // }
}
