<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error
class Pegawai extends CI_Controller {

	public function index(){
			$data["selesai"]   = $this->M_Pekerjaan->count_selesai();
		$data["total"]   = $this->M_Pekerjaan->count_total();
		$data["belumselesai"]   = $this->M_Pekerjaan->count_belumselesai();

		$data['content'] 		= 'Pegawai/Dashboard_pegawai';
		$this->load->view('Pegawai/temp_pegawai',$data);
	}

	 public function laporan_harian()
  {
    $data['laporan']  = $this->LaporanModel->getById();
		$data['content'] 	= 'Pegawai/laporan_harian';
    $this->load->view('Pegawai/temp_pegawai', $data);
  }

  public function input_laporan_harian()
  {
    if ((integer) date('H') >= 16) {
      $this->session->set_flashdata('status_laporan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Terlambat!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
    }
    if ($this->input->post()) {
      $this->LaporanModel->insert();
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil input laporan harian.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('Pegawai/Pegawai/laporan_harian');
    }
		$data['content'] 	= 'Pegawai/input_laporan_harian';
    $this->load->view('Pegawai/temp_pegawai', $data);
  }

	public function jadwal()
	{
		$data['content']	= 'Pegawai/jadwal';
    $this->load->view('Pegawai/temp_pegawai', $data);
	}

}
