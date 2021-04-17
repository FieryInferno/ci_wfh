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
public function listpekerjaan(){
	// 	$data["jumlah_distribusi"]   = $this->M_Pekerjaan->count_distribusi();
	// 	$data["jumlah_ipds"]   = $this->M_Pekerjaan->count_ipds();
	// 	$data["jumlah_sosial"]   = $this->M_Pekerjaan->count_sosial();
	// 	$data["jumlah_produksi"]   = $this->M_Pekerjaan->count_produksi();
	// 	$data["jumlah_nas"]   = $this->M_Pekerjaan->count_nas();

		$data['content'] 		= 'Pegawai/v_pekerjaan';
		$data['pekerjaan']=$this->M_Pekerjaan->get_pekerjaanpegawai();

		$this->load->view('Pegawai/temp_pegawai',$data);

	}
	public function input_hasil(){
	$id = $_POST ['id_bekerja'];

	$status = $_POST ['status'];
		$hasil = $_FILES['hasil'];


                IF ($hasil=''){}ELSE{
                    $config['upload_path'] = './assets/file_pekerjaan';
                    $config['allowed_types'] = '.docx|.xls';

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('hasil')){
                        echo "upload gagal"; die();
                    }else{
                        $foto=$this->upload->data('file_name');
                    }


                }



			$data = array('hasil'=> $hasil,'status'=> $status,  );
		$where= array('id_bekerja' => $id_bekerja );
		$res= $this->M_Pekerjaan->Updatedata('alokasi_pekerjaan',$data,$where);
		if ($res >= 1){
	echo "<script>
	alert ('Edit data berhasil');
	window.location.href='listpekerjaan'
	</script>";
	}else {
		echo "<script>
	alert ('Edit Data Gagal');
	window.location.href='listpekerjaan'
	</script>";

}
}

	public function jadwal()
	{
		$data['content']	= 'Pegawai/jadwal';
    $this->load->view('Pegawai/temp_pegawai', $data);
	}

}
