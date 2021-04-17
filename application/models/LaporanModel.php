<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error

class LaporanModel extends CI_Model {
  
	public function getById(){
    return $this->db->get_where('laporan_pekerjaan', [
      'id_pegawai'  => $this->session->id
    ])->result();
	}	

  public function insert()
  {
    if ((integer) date('H') < 16) {
      $status = 'tepat_waktu';
    } else if ((integer) date('H') >= 16) {
      $status = 'terlambat';
    }
    $this->db->insert('laporan_pekerjaan', [
      'nama_aktivitas'  => $this->input->post('nama_aktivitas'),
      'satuan'          => $this->input->post('satuan'),
      'volume'          => $this->input->post('volume'),
      'durasi'          => $this->input->post('durasi'),
      'pemberi_kerja'   => $this->input->post('pemberi_kerja'),
      'status'          => $status,
      'id_pegawai'      => $this->session->id
    ]);
  }
}
