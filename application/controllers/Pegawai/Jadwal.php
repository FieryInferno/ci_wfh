<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

  public function index() {
		$data['content']  = 'Pegawai/jadwal';
		$data['jadwal']   = $this->M_Pegawai->getJadwal();
		$this->load->view('Pegawai/temp_pegawai',$data);
	}
}
