<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlokasiPekerjaan extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      $id_bekerja         = $_POST ['id_bekerja'];
      $nama_pekerjaan     = $_POST ['nama_pekerjaan'];
      $nama_pegawai       = $_POST ['nama_pegawai'];
      $dari               = $this->session->id;
      $bagian             = $_POST ['bagian'];
      $regional_pekerjaan = $_POST ['regional_pekerjaan'];
      $status             = 'belum_selesai';
      $tanggal            = $_POST ['tanggal'];
      $catatan            = $_POST ['catatan'];
  
      $data = array(
        'id_bekerja'          => $id_bekerja, 
        'nama_pekerjaan'      => $nama_pekerjaan,
        'nama_pegawai'        => $nama_pegawai, 
        'dari'                => $dari, 
        'bagian'              => $bagian, 
        'regional_pekerjaan'  => $regional_pekerjaan, 
        'status'              => $status, 
        'tanggal'             => $tanggal, 
        'catatan'             => $catatan,
        'no_urut'             => $this->input->post('no_urut')
      );
      $res    = $this->M_Pekerjaan->Insertdata('alokasi_pekerjaan', $data);
      $detail = $this->M_Pekerjaan->get_detailpekerjaan($nama_pekerjaan);
      foreach ($detail as $key) {
        $this->M_Pekerjaan->Insertdata('detail_alokasi', [
          'id_bekerja'    => $id_bekerja,
          'nama_kegiatan' => $key->nama_kegiatan,
          'id_pekerjaan'  => $nama_pekerjaan
        ]);
      }
      if ($res >= 1){
        $pegawai  = $this->db->get_where('pegawai', ['id' => $nama_pegawai])->row_array();
        $pekerjan = $this->db->get_where('pekerjaan', ['id_pekerjaan' => $nama_pekerjaan])->row_array();
        $config = [
          'mailtype'    => 'html',
          'charset'     => 'utf-8',
          'protocol'    => 'smtp',
          'smtp_host'   => 'smtp.gmail.com',
          'smtp_user'   => 'fieryinferno33@gmail.com',  // Email gmail
          'smtp_pass'   => 'NaonWeAh00',  // Password gmail
          'smtp_crypto' => 'ssl',
          'smtp_port'   => 465,
          'crlf'        => "\r\n",
          'newline'     => "\r\n"
        ];
        $this->load->library('email', $config);
        $this->email->from('fieryinferno33@gmail.com', 'Sistem WFH BPS');
        $this->email->to($data['email']);
        $this->email->subject('Notifikasi Pekerjaan Baru');
        $this->email->message('Anda Menerima Pekerjaan Baru nama pekerjaan ' . $pekerjaan['nama_pekerjaan'] . ' pada tanggal ' . $tanggal);
        $this->email->send();

        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Berhasil input pekerjaan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('kepala_seksi/alokasi_pekerjaan.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Berhasil input pekerjaan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('kepala_seksi/alokasi_pekerjaan.html');
      } 
    }
    $dariDB = $this->M_Pekerjaan->idbekerja();
    if ($dariDB) $data['id_bekerja']  = $dariDB + 1;
    else $data['id_bekerja']  = 1;
		$data['content'] 		        = 'KepalaSeksi/v_dataalokasi';
		$data['alokasi_pekerjaan']  = $this->M_Pekerjaan->getalokasikasi();
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
	}

  public function cekPekerjaanPegawai()
  {
    $data = $this->M_Pekerjaan->cekPekerjaanPegawai();
    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($data));
  }

  public function hapus($id_bekerja)
  {
    $this->M_Pekerjaan->delete('alokasi_pekerjaan', ['id_bekerja' => $id_bekerja]);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil Hapus Pekerjaan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('kepala_seksi/alokasi_pekerjaan.html');
  }
  
  public function lihat($id_bekerja)
  {
    $data['detail_pekerjaan'] = $this->M_Pekerjaan->getDetailAlokasiPekerjaan($id_bekerja);
    $data['content']          = 'Admin/lihatPekerjaan';
    $data['id_bekerja']       = $id_bekerja;
		$this->load->view('KepalaSeksi/temp_kepalaseksi',$data);
  }
  
  public function verifikasi($id_bekerja)
  {
    $this->M_Pekerjaan->verifikasi($id_bekerja);
    $config = [
      'mailtype'    => 'html',
      'charset'     => 'utf-8',
      'protocol'    => 'smtp',
      'smtp_host'   => 'smtp.gmail.com',
      'smtp_user'   => 'fieryinferno33@gmail.com',  // Email gmail
      'smtp_pass'   => 'NaonWeAh00',  // Password gmail
      'smtp_crypto' => 'ssl',
      'smtp_port'   => 465,
      'crlf'        => "\r\n",
      'newline'     => "\r\n"
    ];
    $this->load->library('email', $config);
    $this->email->from('fieryinferno33@gmail.com', 'Sistem WFH BPS');

    $this->db->join('alokasi_pekerjaan', 'pegawai.id = alokasi_pekerjaan.nama_pegawai');
    $data = $this->db->get_where('pegawai', [
      'alokasi_pekerjaan.id_bekerja' => $id_bekerja
    ])->row_array();
    
    switch ($this->input->post('pilihan')) {
      case 'selesai':
        $pesan  = '<div class="alert alert-success">Pekerjaan Selesai</div>
        Link :' . base_url() . 'pegawai/pekerjaan.html';
        break;
      case 'tdak_selesai':
        $pesan  = '<div class="alert alert-alert">Pekerjaan Belum Selesai</div>
        Link :' . base_url() . 'pegawai/pekerjaan.html';
        break;
      
      default:
        # code...
        break;
    }
    $this->email->to($data['email']);
    $this->email->subject('Notifikasi Pekerjaan Baru');
    $this->email->message($pesan);
    $this->email->send();
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil verifikasi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('kepala_seksi/alokasi_pekerjaan.html');
  }
}
