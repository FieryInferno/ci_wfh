<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error

class Admin extends CI_Controller {

	public function __construct()
  {
			parent::__construct();
  }

	public function index(){
		$data["jumlah_pegawai"]   = $this->db->count_all("pegawai");
		$data["jumlah_pekerjaan"]   = $this->db->count_all("pekerjaan");
		$data['content'] 		= 'Admin/Dashboard_Admin';
		$this->load->view('Admin/temp_admin',$data);

	}

	public function pekerjaan(){
	// 	$data["jumlah_distribusi"]   = $this->M_Pekerjaan->count_distribusi();
	// 	$data["jumlah_ipds"]   = $this->M_Pekerjaan->count_ipds();
	// 	$data["jumlah_sosial"]   = $this->M_Pekerjaan->count_sosial();
	// 	$data["jumlah_produksi"]   = $this->M_Pekerjaan->count_produksi();
	// 	$data["jumlah_nas"]   = $this->M_Pekerjaan->count_nas();
		$data['content'] 		= 'Admin/v_pekerjaan';
		$data['data'] = $this->db->get('pekerjaan');
		$this->load->view('Admin/temp_admin',$data);

	}

	public function tabel_pegawai(){
		$data['content'] = 'Admin/v_lihatpegawai';
		$data['data'] = $this->db->get('pegawai');
		$this->load->view('Admin/temp_admin',$data);
	}
	public function input_pegawai(){
	$data['content'] 		= 'Admin/v_inputpegawai';
		$this->load->view('Admin/temp_admin',$data);
	}
	public function doinputpegawai(){
		$nip = $_POST ['nip'];
		$nama = $_POST ['nama'];
		$jenis_kelamin = $_POST ['jenis_kelamin'];
		$alamat = $_POST ['alamat'];
		$tempatlahir = $_POST ['tempatlahir'];
		$tanggallahir = $_POST ['tanggallahir'];
		$jabatan = $_POST ['jabatan'];
		$namagolongan = $_POST ['namagolongan'];
		$username = $_POST ['username'];
		$password = $_POST ['password'];
		$akses = $_POST ['akses'];

               $foto = $_FILES['foto'];


                IF ($foto=''){}ELSE{
                    $config['upload_path'] = './assets/img';
                    $config['allowed_types'] = 'jpg|png|gif';

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('foto')){
                        echo "upload gagal"; die();
                    }else{
                        $foto=$this->upload->data('file_name');
                    }


                }


			$data = array('nip'=> $nip, 'nama' => $nama, 'jenis_kelamin' => $jenis_kelamin, 'alamat' => $alamat, 'tempatlahir' => $tempatlahir, 'tanggallahir ' => $tanggallahir, 'jabatan' => $jabatan, 'namagolongan' => $namagolongan, 'username' => $username, 'password' => $password, 'akses' => $akses, 'foto' => $foto );
		$res = $this->M_Pegawai->Insertdata('pegawai',$data);
		if ($res >= 1){
	echo "<script>
	alert ('Tambah data berhasil');
	window.location.href='tabel_pegawai'
	</script>";
	}else {
		echo "<script>
	alert ('Tambah Data Gagal');
	window.location.href='tabel_pegawai'
	</script>";
	}
	}
	public function edit_pegawai ($id){
	$pegawai= $this->M_Pegawai->Getpegawai("where id ='$id'");

	$data = array(
		'nip'=> $pegawai[0] ['nip'],
		'nama' => $pegawai[0] ['nama'],
		'jenis_kelamin' => $pegawai[0] ['jenis_kelamin'],
		'alamat' => $pegawai[0] ['alamat'],
		'tempatlahir' => $pegawai[0] ['tempatlahir'],
		'tanggallahir ' => $pegawai[0] ['tanggallahir'],
		'jabatan' => $pegawai[0] ['jabatan'],
		'namagolongan' => $pegawai[0]['namagolongan'],
		'username' => $pegawai[0]  ['username'],
		'password' => $pegawai[0] ['password'],
			'akses'=> $pegawai[0] ['akses'] ,
		'foto' => $pegawai[0] ['foto'] );
	$data['content'] = 'Admin/v_editpegawai';
		$this->load->view('Admin/temp_admin', $data);
}
public function do_editpegawai(){
	$nip = $_POST ['nip'];
		$nama = $_POST ['nama'];
		$jenis_kelamin = $_POST ['jenis_kelamin'];
		$alamat = $_POST ['alamat'];
		$tempatlahir = $_POST ['tempatlahir'];
		$tanggallahir = $_POST ['tanggallahir'];
		$jabatan = $_POST ['jabatan'];
		$namagolongan = $_POST ['namagolongan'];
		$username = $_POST ['username'];
		$password = $_POST ['password'];
		$akses = $_POST ['akses'];

               $foto = $_FILES['foto'];


                IF ($foto=''){}ELSE{
                    $config['upload_path'] = './assets/img';
                    $config['allowed_types'] = 'jpg|png|gif';

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('foto')){
                        echo "upload gagal"; die();
                    }else{
                        $foto=$this->upload->data('file_name');
                    }


                }

			$data = array('nip'=> $nip, 'nama' => $nama, 'jenis_kelamin' => $jenis_kelamin, 'alamat' => $alamat, 'tempatlahir' => $tempatlahir, 'tanggallahir ' => $tanggallahir, 'jabatan' => $jabatan, 'namagolongan' => $namagolongan, 'username' => $username, 'password' => $password, 'akses' => $akses, 'foto' => $foto );

		$where= array('id' => $id );
		$res= $this->M_Pegawai->Updatedata('pegawai',$data,$where);
		if ($res >= 1){
	echo "<script>
	alert ('Edit data berhasil');
	window.location.href='tabel_pegawai'
	</script>";
	}else {
		echo "<script>
	alert ('Edit Data Gagal');
	window.location.href='tabel_pegawai'
	</script>";

}
}
public function hapus_pegawai($id){
$where  = array('id' => $id );
$res= $this->M_Pegawai->Deletedata('pegawai', $where);

if ($res >=1){
	$this->session->set_flashdata('pesan','Delete data'.$id.'berhasil');
	redirect ('Admin/Admin/tabel_pegawai');
	echo "<h3> Hapus Data  Gagal </h3>";
}
else{
	echo "<h3> Hapus Data  Gagal </h3>";
}
}

public function tabel_golongan(){
		$data['content'] = 'Admin/v_lihatgolongan';
		$data['data'] = $this->db->get('golongan');
		$this->load->view('Admin/temp_admin',$data);
	}
public function input_golongan(){
	$data['content'] 		= 'Admin/v_inputgolongan';
		$this->load->view('Admin/temp_admin',$data);
	}
	public function doinputgolongan(){
		$golongan = $_POST ['golongan'];
		$pangkat = $_POST ['pangkat'];


			$data = array('golongan'=> $golongan, 'pangkat' => $pangkat );
		$res = $this->M_Pegawai->Insertdata('golongan',$data);
		if ($res >= 1){
	echo "<script>
	alert ('Tambah data berhasil');
	window.location.href='tabel_golongan'
	</script>";
	}else {
		echo "<script>
	alert ('Tambah Data Gagal');
	window.location.href='tabel_golongan'
	</script>";
	}
	}
public function edit_golongan ($id){
	$golongan= $this->M_Pegawai->Getgolongan("where id ='$id'");

	$data = array(
		'id' => $golongan[0] ['id'],
		'golongan' => $golongan[0] ['golongan'],
	'pangkat' => $golongan[0] ['pangkat'] );

	$data['content'] = 'Admin/v_editgolongan';
		$this->load->view('Admin/temp_admin', $data);
}
public function do_editgolongan(){
	$id = $_POST ['id'];
	$golongan = $_POST ['golongan'];
	$pangkat = $_POST ['pangkat'];



			$data = array('golongan'=> $golongan,'pangkat'=> $pangkat,  );
		$where= array('id' => $id );
		$res= $this->M_Pegawai->Updatedata('golongan',$data,$where);
		if ($res >= 1){
	echo "<script>
	alert ('Edit data berhasil');
	window.location.href='tabel_golongan'
	</script>";
	}else {
		echo "<script>
	alert ('Edit Data Gagal');
	window.location.href='tabel_golongan'
	</script>";

}
}
public function hapus_golongan($id){
$where  = array('id' => $id );
$res= $this->M_Pegawai->Deletedata('golongan', $where);

if ($res >=1){
	$this->session->set_flashdata('pesan','Delete data'.$id.'berhasil');
	redirect ('Admin/Admin/tabel_golongan');
	echo "<h3> Hapus Data  Gagal </h3>";
}
else{
	echo "<h3> Hapus Data  Gagal </h3>";
}
}
	public function tabel_jabatan(){
		$data['content'] = 'Admin/v_lihatjabatan';
		$data['data'] = $this->db->get('jabatan');
		$this->load->view('Admin/temp_admin',$data);
	}
	public function input_jabatan(){
	$data['content'] 		= 'Admin/v_inputjabatan';
		$this->load->view('Admin/temp_admin',$data);
	}
	public function doinputjabatan(){
		$jabatan = $_POST ['jabatan'];



			$data = array('jabatan'=> $jabatan);
		$res = $this->M_Pegawai->Insertdata('jabatan',$data);
		if ($res >= 1){
	echo "<script>
	alert ('Tambah data berhasil');
	window.location.href='tabel_jabatan'
	</script>";
	}else {
		echo "<script>
	alert ('Tambah Data Gagal');
	window.location.href='tabel_jabatan'
	</script>";
	}
	}
		public function edit_jabatan ($id){
	$jabatan= $this->M_Pegawai->Getjabatan("where id ='$id'");

	$data = array(

		'id' => $jabatan[0] ['id'],

		'jabatan' => $jabatan[0] ['jabatan'] );

	$data['content'] = 'Admin/v_editjabatan';
		$this->load->view('Admin/temp_admin', $data);
}
public function do_editjabatan(){
$id = $_POST ['id'];
		$jabatan = $_POST ['jabatan'];

		$data = array('jabatan' => $jabatan);

		$where= array('id' => $id );
		$res= $this->M_Pegawai->Updatedata('jabatan',$data,$where);
		if ($res >= 1){
	echo "<script>
	alert ('Edit data berhasil');
	window.location.href='tabel_jabatan'
	</script>";
	}else {
		echo "<script>
	alert ('Edit Data Gagal');
	window.location.href='tabel_jabatan'
	</script>";

}
}
public function hapus_jabatan($id){
$where  = array('id' => $id );
$res= $this->M_Pegawai->Deletedata('jabatan', $where);

if ($res >=1){
	$this->session->set_flashdata('pesan','Delete data'.$id.'berhasil');
	redirect ('Admin/Admin/tabel_jabatan');
	echo "<h3> Hapus Data  Gagal </h3>";
}
else{
	echo "<h3> Hapus Data  Gagal </h3>";
}
}
	}
