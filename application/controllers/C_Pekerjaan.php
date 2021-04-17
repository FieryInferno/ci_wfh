<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error
class C_Pekerjaan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Programmer : 
	 * Website : 
	 */
	public function index(){
		/*if($this->session->userdata('nm_login')){*/
			//$data=$this->session->userdata('nm_login');
			//$data['nm_login']	= $data;
			//$d['bread'] 		= 'Home';
			
			$this->load->view('login');
		/*}else{
			$this->load->view('view');
		}*/
		
	}

	public function index(){
		/*if($this->session->userdata('nm_login')){*/
			//$data=$this->session->userdata('nm_login');
			//$data['nm_login']	= $data;
			//$d['bread'] 		= 'Home';
			
			$this->load->view('login');
		/*}else{
			$this->load->view('view');
		}*/
		
	}
}