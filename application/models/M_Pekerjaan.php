<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pekerjaan extends CI_Model {

  private $table  = 'alokasi_pekerjaan';
	
  public function count_selesai()
	{
		$this->db->where("alokasi_pekerjaan.nama_pegawai= '$_SESSION[nama]' and alokasi_pekerjaan.status = 'selesai'" );
    $this->db->from("alokasi_pekerjaan");
    return $this->db-> count_all_results();
	}

	public function Getpekerjaan($where="")
	{
		$data = $this->db->query('select * from pekerjaan '.$where);
		return $data->result_array();
	}

	public function count_total()
	{
		$this->db->where("alokasi_pekerjaan.nama_pegawai= '$_SESSION[nama]'" );
    $this->db->from("alokasi_pekerjaan");
    return $this->db-> count_all_results();
	}

	public function count_belumselesai()
	{
		$this->db->where("alokasi_pekerjaan.nama_pegawai= '$_SESSION[nama]' and (alokasi_pekerjaan.status = 'Menunggu Verifikasi' or alokasi_pekerjaan.status = 'Belum Selesai')" );
    $this->db->from("alokasi_pekerjaan");
    return $this->db-> count_all_results();
	}

	public function count_sosial()
	{
		$this->db->where("bagian","Sosial");
    $this->db->from("pekerjaan");
      return $this->db-> count_all_results();
	}

	public function count_produksi()
	{
		$this->db->where("bagian","Produksi");
		$this->db->from("pekerjaan");
		return $this->db-> count_all_results();
	}
	
	public function get_pekerjaanpegawai(){
    $this->db->join('regional_pekerjaan', 'alokasi_pekerjaan.regional_pekerjaan = regional_pekerjaan.id_regional');
    $this->db->join('pekerjaan', 'alokasi_pekerjaan.nama_pekerjaan = pekerjaan.id_pekerjaan');
    $data = $this->db->get_where('alokasi_pekerjaan', [
      'nama_pegawai'  => $this->session->id
    ])->result_array();
    for ($i=0; $i < count($data); $i++) {
      $key                  = $data[$i];
      $data[$i]['progress'] = $this->hitungPersenPekerjaan($key['id_bekerja']) * 100;
    }
    return $data;
  }

  public function get_pekerjaankepalaseksi(){
    return $this->db->get_where('pekerjaan', [
      'bagian'  => $this->session->jabatan
    ])->result();
  }

  public function get_detailpekerjaan($id_pekerjaan){
    return $this->db->get_where('detail_pekerjaan', [
      'id_pekerjaan'  => $id_pekerjaan
    ])->result();
  }

  function idpekerjaan() {
    $this->db->select_max('no_urut');
    $hasil  = $this->db->get('pekerjaan')->row();
    return $hasil->no_urut;
	}

	function idbekerja() {
    $this->db->select_max('no_urut');
    $hasil  = $this->db->get('alokasi_pekerjaan')->row();
    return $hasil->no_urut;
	}
	
	public function Insertdata($tableName,$data)
	{
		$res  = $this->db->insert($tableName,$data);
		return $res ;
  }

	public function getalokasikasi(){
    $this->db->join('pegawai', 'alokasi_pekerjaan.nama_pegawai = pegawai.id');
    $this->db->join('regional_pekerjaan', 'alokasi_pekerjaan.regional_pekerjaan = regional_pekerjaan.id_regional');
    $this->db->join('pekerjaan', 'alokasi_pekerjaan.nama_pekerjaan = pekerjaan.id_pekerjaan');
    $this->db->select('alokasi_pekerjaan.tanggal, pekerjaan.nama_pekerjaan, pegawai.nama, regional_pekerjaan.lokasi, alokasi_pekerjaan.status, alokasi_pekerjaan.id_bekerja');
    $data = $this->db->get_where('alokasi_pekerjaan', [
      'dari'  => $this->session->id 
    ])->result_array();
    // print_r($data[0]->tanggal);
    // die();
    for ($i=0; $i < count($data); $i++) {
      $key                  = $data[$i];
      $data[$i]['progress'] = $this->hitungPersenPekerjaan($key['id_bekerja']) * 100;
    }
    return $data;
  }

  public function Updatedata($tableName, $data, $where)
	{
		return $this->db->update($tableName, $data, $where);
  }

  public function cekPekerjaanPegawai()
  {
    return $this->db->get_where($this->table, [
      'nama_pegawai'  => $this->input->post('id_pegawai'),
      'tanggal'       => $this->input->post('tanggal'),
      'status'        => 'belum_selesai'
    ])->row_array();
  }

  public function get($id_pekerjaan)
  {
    return $this->db->get_where('pekerjaan', [
      'id_pekerjaan'  => $id_pekerjaan
    ])->row_array();
  }

  public function delete($table, $where)
  {
    $this->db->delete($table, $where);
  }

  public function getDetailAlokasiPekerjaan($id_bekerja)
  {
    $this->db->join('alokasi_pekerjaan', 'detail_alokasi.id_bekerja = alokasi_pekerjaan.id_bekerja');
    $this->db->select('detail_alokasi.*, alokasi_pekerjaan.tanggal');
    return $this->db->get_where('detail_alokasi', [
      'alokasi_pekerjaan.id_bekerja'  => $id_bekerja
    ])->result_array();
  }

  public function hitungPersenPekerjaan($id_bekerja)
  {
    $this->db->join('alokasi_pekerjaan', 'detail_alokasi.id_bekerja = alokasi_pekerjaan.id_bekerja');
    $this->db->select('detail_alokasi.*');
    $data = $this->db->get_where('detail_alokasi', [
      'detail_alokasi.id_bekerja'  => $id_bekerja 
    ])->result_array();
    $belumSelesai = array_count_values(array_column($data, 'hasil'))['0'];
    if ($belumSelesai) {
      $selesai  = count($data) - $belumSelesai;
    } else {
      $selesai      = count($data);
    }
    return $selesai / count($data);
  }

  public function verifikasi($id_bekerja)
  {
    switch ($this->input->post('pilihan')) {
      case 'selesai':
        $this->db->update('alokasi_pekerjaan', ['status'  => 'selesai'], ['id_bekerja'  => $id_bekerja]);
        break;
      case 'tidak_selesai':
        $this->db->update('detail_alokasi', ['hasil'  => '0'], ['id_bekerja'  => $id_bekerja]);
        $this->db->update('alokasi_pekerjaan', ['catatan' => $this->input->post('catatan')], ['id_bekerja'  => $id_bekerja]);
        break;
      
      default:
        # code...
        break;
    }
  }
}
