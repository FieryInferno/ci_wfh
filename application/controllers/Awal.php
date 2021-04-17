<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error

class Awal extends CI_Controller {

	public function __construct()
  {
			parent::__construct();
			if ($this->session->id) {
				switch ($this->session->akses) {
					case 'admin':
	          redirect('Admin/Admin');
	          break;
	        case 'pegawai':
	          redirect('Pegawai/Pegawai');
	          break;
	        case 'Kepala Seksi':
	          redirect('KepalaSeksi/KepalaSeksi');
	          break;
	        case 'tata_usaha':
	          redirect('tata_usaha');
	          break;

	        default:
	          # code...
	          break;
				}
			}
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

	public function cek_Login(){
		$username       = $this->input->post('username');
		$password       = $this->input->post('password');
		$cnt            = $this->db->get_where('pegawai',array('username'=> $username,'password' => $password))->num_rows();
		$user           = $this->db->get_where('pegawai', array('username' => $username ))->row_array();
		$this->username = $username ;
    if ($cnt > 0) {
      $_SESSION['id']             = $user['id'];
			$_SESSION['nama']           = $user['nama'];
			$_SESSION['nip']            = $user['nip'];
			$_SESSION['username']       = $user['username'];
			$_SESSION['akses']          = $user['akses'];
			$_SESSION['jabatan']        = $user['jabatan'];
			$_SESSION['tempatlahir']    = $user['tempatlahir'];
			$_SESSION['tanggallahir']   = $user['tanggallahir'];
			$_SESSION['jenis_kelamin']  = $user['jenis_kelamin'];
			$_SESSION['alamat']         = $user['alamat'];
			$_SESSION['foto']           = $user['foto'];
      switch ($user['akses']) {
        case 'admin':
          redirect('Admin/Admin');
          break;
        case 'pegawai':
          redirect('Pegawai/Pegawai');
          break;
        case 'Kepala Seksi':
          redirect('KepalaSeksi/KepalaSeksi');
          break;
        case 'tata_usaha':
          redirect('tata_usaha');
          break;

        default:
          # code...
          break;
      }
    } else {
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Gagal!</strong> Username atau password salah.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect();
    }
	}
public function profil(){

		$data['content'] 		= 'v_profil';
		$this->load->view('Admin/temp_admin',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
