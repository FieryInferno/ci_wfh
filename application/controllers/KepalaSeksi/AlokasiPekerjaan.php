<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlokasiPekerjaan extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      $id_bekerja         = $_POST ['id_bekerja'];
      $nama_pekerjaan     = $_POST ['nama_pekerjaan'];
      $nama_pegawai       = $_POST ['nama_pegawai'];
      $dari               = $_POST ['dari'];
      $bagian             = $_POST ['bagian'];
      $regional_pekerjaan = $_POST ['regional_pekerjaan'];
      $status             = 'belum_selesai';
      $tanggal            = $_POST ['tanggal'];
      $catatan            = $_POST ['catatan'];
  
      $data = array(
        'id_bekerja'          => $id_bekerja, 
        'nama_pekerjaan'      => $nama_pekerjaan,
        'nama_pegawai'        => $nama_pegawai, 
        'dari'                => $dari, 
        'bagian'              => $bagian, 
        'regional_pekerjaan'  => $regional_pekerjaan, 
        'status'              => $status, 
        'tanggal'             => $tanggal, 
        'catatan'             => $catatan
      );
      $res  = $this->M_Pekerjaan->Insertdata('alokasi_pekerjaan', $data);
      if ($res >= 1){
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Berhasil input pekerjaan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('kepala_seksi/alokasi_pekerjaan');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Berhasil input pekerjaan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('kepala_seksi/alokasi_pekerjaan');
      } 
    }
    $dariDB                     = $this->M_Pekerjaan->idbekerja();
		$nourut                     = substr($dariDB, 3, 4);
		$idbekerjasekarang          = $nourut + 1 ;
		$data                       = array('id_bekerja' => $idbekerjasekarang );
		$data['content'] 		        = 'KepalaSeksi/v_dataalokasi';
		$data['alokasi_pekerjaan']  = $this->M_Pekerjaan->getalokasikasi();
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
	}

  public function cekPekerjaanPegawai()
  {
    $data = $this->M_Pekerjaan->cekPekerjaanPegawai();
    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($data));
  }
}
