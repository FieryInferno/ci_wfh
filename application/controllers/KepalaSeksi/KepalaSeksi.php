<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error

class KepalaSeksi extends CI_Controller {
  
	public function index(){
		$data['content']  = 'KepalaSeksi/Dashboard_KepalaSeksi';
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
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
