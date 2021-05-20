<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {
  
	public function index()
	{
		$data['content']    = 'KepalaSeksi/v_pekerjaan';
		$data['pekerjaan']  = $this->M_Pekerjaan->get_pekerjaankepalaseksi();
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
	}

  public function tambah()
  {
    if ($this->input->post()) {
      $data = [
        'id_pekerjaan'    => $this->input->post('id_pekerjaan'), 
        'nama_pekerjaan'  => $this->input->post('nama_pekerjaan'), 
        'bagian'          => $this->input->post('bagian'), 
        'jenis'           => $this->input->post('jenis'), 
        'no_urut'         => $this->input->post('no_urut'),
      ];
      $res  = $this->M_Pekerjaan->Insertdata('pekerjaan', $data);
      if ($res >= 1){
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Berhasil input pekerjaan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('kepala_seksi/pekerjaan.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> Gagal input pekerjaan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('kepala_seksi/pekerjaan/tambah.html');
      } 
    }
		$dariDB = $this->M_Pekerjaan->idpekerjaan();
    if ($dariDB) $data['id_pekerjaan'] = $dariDB + 1;
    else $data['id_pekerjaan'] = 1;
		$data['content']  = 'KepalaSeksi/v_inputpekerjaan';
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
  }

  public function inputSubPekerjaan()
  {	
    $data = [
      'id_kegiatan'   => $this->input->post('id_kegiatan'), 
      'nama_kegiatan' => $this->input->post('nama_kegiatan'), 
      'id_pekerjaan'  => $this->input->post('id_pekerjaan')
    ];
		$res  = $this->M_Pekerjaan->Insertdata('detail_pekerjaan', $data);
		if ($res >= 1){
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil input sub pekerjaan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('kepala_seksi/pekerjaan.html');
    } else {
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Gagal!</strong> Gagal input sub pekerjaan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('kepala_seksi/pekerjaan.html');
    }
  }

  public function edit($id_pekerjaan)
  {
    if ($this->input->post()) {
      $data = [ 
        'nama_pekerjaan'  => $this->input->post('nama_pekerjaan'),
        'jenis'           => $this->input->post('jenis'), 
      ];
      $where  = [
        'id_pekerjaan'  => $id_pekerjaan
      ];
      $res  = $this->M_Pekerjaan->Updatedata('pekerjaan', $data, $where);
      if ($res >= 1){
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Berhasil Edit pekerjaan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('kepala_seksi/pekerjaan.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> Gagal Edit pekerjaan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('kepala_seksi/pekerjaan/edit/' . $id_pekerjaan);
      } 
    }
    $data             = $this->M_Pekerjaan->get($id_pekerjaan);
		$data['content']  = 'KepalaSeksi/editPekerjaan';
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
  }
}
