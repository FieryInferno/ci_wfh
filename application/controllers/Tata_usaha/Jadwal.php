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
      $this->M_Jadwal->delete();
      $tahun    = '2021'; //Mengambil tahun saat ini
      $bulan    = $this->input->post('bulan'); //Mengambil bulan saat ini
      $tanggal  = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
      $pegawai  = $this->M_Pegawai->getAll();
      for ($i=0; $i < count($pegawai); $i++) {
        $key                  = $pegawai[$i];
        $jadwal['id_pegawai'] = $key['id'];
        $jadwal_temp['id_pegawai']  = $key['id'];
        for ($j=1; $j < $tanggal+1; $j++) {
          $nomor        = '`' . $j . '`';
          if (date('l', strtotime('2021-' . $bulan . '-' . $j)) == 'Sunday' || date('l', strtotime('2021-' . $bulan . '-' . $j)) == 'Saturday') {
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
                  }
                  break;

                default:
                  // code...
                  break;
              }
            }
            $jadwal[$nomor]   = $kerja;
            $jadwal_temp[$j]  = $kerja;
          }
        }
        $this->M_Jadwal->insert($jadwal);
      }
      redirect('tata_usaha/jadwal');
    }
		$data['content']  = 'tata_usaha/generate_jadwal';
		$this->load->view('tata_usaha/template', $data);
  }

	public function cetak()
	{
    $data['jadwal'] = $this->M_Jadwal->getAll();
		ob_start();
      $this->load->view('tata_usaha/jadwal_pdf.php', $data);
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
}
