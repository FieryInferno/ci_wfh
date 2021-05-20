<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error

class KepalaSeksi extends CI_Controller {
  
	public function index(){
		$data['content']  = 'KepalaSeksi/Dashboard_KepalaSeksi';
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
	}
}
