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
    return $this->db->get_where('alokasi_pekerjaan', [
      'nama_pegawai'  => $this->session->id
    ])->result();
  }

  public function get_pekerjaankepalaseksi(){
    return $this->db->get_where('pekerjaan', [
      'bagian'  => $this->session->jabatan
    ])->result();
  }

  public function get_detailpekerjaan($id_pekerjaan){
    $this->db->select('*');
    $this->db->from('detail_pekerjaan');
    $this->db->where('id_pekerjaan', $id_pekerjaan);
    return $this->db->get()->result();
  }

  function idpekerjaan(){
    $this->db->select_max('no_urut');
    $hasil  = $this->db->get('pekerjaan')->row();
    return $hasil->no_urut;
	}

	function idbekerja(){
		$q      = $this->db->query("select MAX(id_bekerja) as id_bekerja from alokasi_pekerjaan");
    $hasil  = $q->row();
    return $hasil->id_bekerja;
	}
	
	public function Insertdata($tableName,$data)
	{
		$res  = $this->db->insert($tableName,$data);
		return $res ;
  }

	public function getalokasikasi(){
    $this->db->join('pegawai', 'alokasi_pekerjaan.nama_pegawai = pegawai.id');
    $this->db->join('regional_pekerjaan', 'alokasi_pekerjaan.regional_pekerjaan = regional_pekerjaan.id_regional');
    return $this->db->get_where('alokasi_pekerjaan', [
      'dari'  => $this->session->id 
    ])->result();
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
}
