<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error

class LaporanModel extends CI_Model {
  
	public function getById(){
    return $this->db->get_where('laporan_pekerjaan', [
      'id_pegawai'  => $this->session->id
    ])->result();
	}	

  public function insert()
  {
    if ((integer) date('H') < 16) {
      $status = 'tepat_waktu';
    } else if ((integer) date('H') >= 16) {
      $status = 'terlambat';
    }

    $config['upload_path']          = './assets/';
    $config['allowed_types']        = 'pdf|jpg|png|jpeg';
    $config['max_size']             = 100000;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;

    $this->upload->initialize($config);

    // if (!$this->upload->do_upload('bukti')) {
    //   $this->session->flashdata('pesan', '
    //     <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //       <strong>Gagal!</strong> gagal mengupload file surat.
    //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //       </button>
    //     </div>
    //   ');
    //   redirect('Pengirim/Surat/add');
    // } else {
    //   $file = $this->upload->data('file_name');
    // }

    // $this->db->insert('laporan_pekerjaan', [
    //   'nama_aktivitas'  => $this->input->post('nama_aktivitas'),
    //   'satuan'          => $this->input->post('satuan'),
    //   'volume'          => $this->input->post('volume'),
    //   'durasi'          => $this->input->post('durasi'),
    //   'pemberi_kerja'   => $this->input->post('pemberi_kerja'),
    //   'status'          => $status,
    //   'id_pegawai'      => $this->session->id,
    //   'jadwal'          => $this->input->post('jadwal'),
    //   'bukti'           => $file
    // ]);

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
    $data = $this->db->get_where('pegawai', [
      'akses' => 'kepala_seksi'
    ])->row_array();
    $this->email->to($data['email']);
    $this->email->subject('Notifikasi Laporan Harian Pegawai');
    $this->email->message($this->session->nama . 'sudah menginput laporan harian');
    $this->email->send();
  }
}
