<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Jadwal extends CI_Controller {

	public function index() {
    $data['jadwal']   = $this->M_Jadwal->getAll();
		$data['content']  = 'tata_usaha/jadwal';
		$this->load->view('tata_usaha/template', $data);
	}

  public function generate()
  {
    if ($this->input->post()) {
      $tanggalLibur = json_decode(file_get_contents('http://raw.githubusercontent.com/guangrei/Json-Indonesia-holidays/master/calendar.json'), TRUE);
      // print_r($tanggalLibur);
      // if (!empty($tanggalLibur['20210817'])) {
      //   print_r('Hari Kemerdekaan');
      // }
      // die();
      $this->M_Jadwal->delete();
      $tahun    = '2021'; //Mengambil tahun saat ini
      $bulan    = $this->input->post('bulan'); //Mengambil bulan saat ini
      $tanggal  = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
      $pegawai  = $this->M_Pegawai->getAll();
      for ($i=0; $i < count($pegawai); $i++) {
        $key                        = $pegawai[$i];
        $jadwal['id_pegawai']       = $key['id'];
        $jadwal_temp['id_pegawai']  = $key['id'];
        for ($j=1; $j < $tanggal+1; $j++) {
          $nomor        = '`' . $j . '`';
          switch (strlen($j)) {
            case '1':
              $z = '0' . $j;
              break;
            case '2':
              $z = $j;
              break;
            
            default:
              # code...
              break;
          }
          // print_r('2021' . $bulan . $z);echo '<br/>';
          if (date('l', strtotime('2021-' . $bulan . '-' . $j)) == 'Sunday' || date('l', strtotime('2021-' . $bulan . '-' . $j)) == 'Saturday' ||!empty($tanggalLibur['2021' . $bulan . $z])) {
            $jadwal[$nomor]   = 'libur';
            $jadwal_temp[$j]  = 'libur';
          } else {
            if ($j == 1) {
              if ($i%2 == 0) {
                $kerja  = 'wfh';
              } else {
                $kerja  = 'wfo';
              }
            } else {
              switch ($jadwal_temp[$j-1]) {
                case 'wfh':
                  $kerja = 'wfo';
                  break;
                case 'wfo':
                  $kerja = 'wfh';
                  break;
                case 'libur':
                  switch ($jadwal_temp[$j-3]) {
                    case 'wfh':
                      $kerja = 'wfo';
                      break;
                    case 'wfo':
                      $kerja = 'wfh';
                      break;

                    default:
                      if ($i%2 == 0) {
                        $kerja  = 'wfh';
                      } else {
                        $kerja  = 'wfo';
                      }
                      break;
                  }
                  break;

                default:
                  // code...
                  break;
              }
            }
            $jadwal[$nomor]   = $kerja;
            $jadwal_temp[$j]  = $kerja;
            $jadwal['bulan']  = $bulan;
          }
        }
        $this->M_Jadwal->insert($jadwal);
      }
      // print_r($jadwal);
      // die();
      redirect('tata_usaha/jadwal');
    }
		$data['content']  = 'tata_usaha/generate_jadwal';
		$this->load->view('tata_usaha/template', $data);
  }

	public function cetak()
	{
    $data['jadwal'] = $this->M_Jadwal->getAll();
		ob_start();
      $this->load->view('tata_usaha/jadwal_pdf', $data);
      $html = ob_get_contents();
    ob_end_clean();
    ob_clean();
    $filename   = 'Jadwal';
    $options  	= new Options();
    $options->set('isRemoteEnabled', TRUE);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('legal', 'landscape');
    $dompdf->render();
    $dompdf->stream($filename, array("Attachment" => 0) );
	}

  public function ubah()
  {
    $tanggal  = "`" . $this->input->post('tanggal') . "`";
    $this->db->update('jadwal', [$tanggal  => $this->input->post('jenis')], ['id_pegawai'  => $this->input->post('id_pegawai')]);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil edit jadwal.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('tata_usaha/jadwal');
  }
}
