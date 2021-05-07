<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error
class KepalaSeksi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Programmer : 
	 * Website : 
	 */

	public function index(){
		$data['content'] 		= 'KepalaSeksi/Dashboard_KepalaSeksi';
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
	}	
public function daftar_pekerjaan(){
		$data['content'] 		= 'KepalaSeksi/v_pekerjaan';
		$data['pekerjaan']=$this->M_Pekerjaan->get_pekerjaankepalaseksi();
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
		
		
	}	
	public function input_pekerjaan(){
		$dariDB = $this->M_Pekerjaan->idpekerjaan();
		$nourut=substr($dariDB, 3, 4);
		$idpekerjaansekarang= $nourut + 1 ;
		$data = array('id_pekerjaan' => $idpekerjaansekarang );
		$data['content'] 		= 'KepalaSeksi/v_inputpekerjaan';
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
	}
	public function do_inputpekerjaan(){
		$id_pekerjaan = $_POST ['id_pekerjaan'];
		$nama_pekerjaan = $_POST ['nama_pekerjaan'];
		$bagian = $_POST ['bagian'];
		$jenis = $_POST ['jenis'];




			$data = array('id_pekerjaan'=> $id_pekerjaan, 'nama_pekerjaan' => $nama_pekerjaan, 'bagian' => $bagian, 'jenis' => $jenis );
		$res = $this->M_Pekerjaan->Insertdata('pekerjaan',$data);
		if ($res >= 1){
		$this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil input pekerjaan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('KepalaSeksi/KepalaSeksi/daftar_pekerjaan');
	}else {
		echo "<script>
	alert ('Tambah Data Gagal');
	window.location.href='daftar_pekerjaan'
	</script>";
	} 
	}
	public function do_inputsubpekerjaan(){
		$id_kegiatan = $_POST ['id_kegiatan'];
		$nama_kegiatan = $_POST ['nama_kegiatan'];
		$id_pekerjaan = $_POST ['id_pekerjaan'];
		


			$data = array('id_kegiatan'=> $id_kegiatan, 'nama_kegiatan' => $nama_kegiatan, 'id_pekerjaan' => $id_pekerjaan);
		$res = $this->M_Pekerjaan->Insertdata('detail_pekerjaan',$data);
		if ($res >= 1){
	$this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil input sub pekerjaan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('KepalaSeksi/KepalaSeksi/daftar_pekerjaan');
	}else {
		echo "<script>
	alert ('Tambah Data Gagal');
	window.location.href='daftar_pekerjaan'
	</script>";
	} 
	}
	public function lihat_pekerjaan ($id_pekerjaan){
// 	$pekerjaan= $this->M_Pekerjaan->Getpekerjaan("where id_pekerjaan =
// '$id_pekerjaan'");

	$data['detail_pekerjaan']=$this->M_Pekerjaan->get_detailpekerjaan($id_pekerjaan);
	// $data = array(

	// 	'id_pekerjaan' => $pekerjaan[0] ['id_pekerjaan'], 
		
	// 	'nama_pekerjaan' => $pekerjaan[0] ['nama_pekerjaan'],
	// 'jenis' => $pekerjaan[0] ['jenis'] );
	
	$data['content'] = 'KepalaSeksi/v_lihatpekerjaan';
		$this->load->view('KepalaSeksi/temp_kepalaseksi', $data);
}
}
