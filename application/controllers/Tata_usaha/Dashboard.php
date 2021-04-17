<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error

class Dashboard extends CI_Controller {

	public function index() {
		$data['content']  = 'tata_usaha/dashboard';
		$this->load->view('tata_usaha/template', $data);
	}
}
