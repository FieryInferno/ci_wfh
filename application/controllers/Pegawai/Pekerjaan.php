<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {

  public function index() {
		$data['content']    = 'Pegawai/v_pekerjaan';
		$data['pekerjaan']  = $this->M_Pekerjaan->get_pekerjaanpegawai();
		$this->load->view('Pegawai/temp_pegawai',$data);
	}
  
  public function lihat($id_bekerja)
  {
    $data['detail_pekerjaan'] = $this->M_Pekerjaan->getDetailAlokasiPekerjaan($id_bekerja);
    $data['content']          = 'Pegawai/lihatPekerjaan';
    $data['id_bekerja']       = $id_bekerja;
    $this->load->view('Pegawai/temp_pegawai', $data);
  }

  public function inputHasil()
  {
    if ($_FILES['hasil']) {
      $config['upload_path']    = './assets/file_pekerjaan/';
      $config['allowed_types']  = 'docx|xls|pdf';
      $this->upload->initialize($config);
      if(!$this->upload->do_upload('hasil')){
        print_r($this->upload->display_errors()); die();
      }else{
        $foto = $this->upload->data('file_name');
      }
    }
		$res    = $this->M_Pekerjaan->Updatedata('detail_alokasi', ['hasil' => $foto], ['id_detail_alokasi' => $this->input->post('id_detail_alokasi')]);
    $persen = $this->M_Pekerjaan->hitungPersenPekerjaan($this->input->post('id_bekerja'));
    if ($persen == 1) $status  = 'menunggu_verifikasi';
    else $status = 'belum_selesai';
    $this->M_Pekerjaan->Updatedata('alokasi_pekerjaan', ['status' => $status], ['id_bekerja'  => $this->input->post('id_bekerja')]);
		if ($res >= 1){
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil input hasil pekerjaan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('pegawai/pekerjaan/lihat/' . $this->input->post('id_bekerja'));
    }else {
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Gagal!</strong> Gagal input hasil pekerjaan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('pegawai/pekerjaan/lihat/' . $this->input->post('id_bekerja'));
    }
  }
}
