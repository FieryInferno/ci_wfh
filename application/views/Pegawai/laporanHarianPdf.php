<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</head>
<body>
  <div class="text-center">LAPORAN PELAKSANAAN TUGAS HARIAN SELAMA PERIODE 
    <?php
      switch ($laporan_harian[0]['jadwal']) {
        case 'wfh':
          echo 'WORK FROM HOME';
          break;
        case 'wfo':
          echo 'WORK FROM OFFICE';
          break;
        
        default:
          # code...
          break;
      } 
    ?>
  </div>
  <br>
  <div>NAMA : <?= $this->session->nama; ?></div>
  <div>UNIT KERJA : BPS Kabupaten Subang</div>
  <?php
    function tgl_indo($tanggal){
      $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      );
      $pecahkan = explode('-', $tanggal);
      return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
  ?>
  <div>TANGGAL : <?= tgl_indo($this->input->get('tanggal')); ?></div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col" rowspan="2" class="text-center">No</th>
        <th scope="col" rowspan="2" class="text-center">Deskripsi Pekerjaan/Penugasan</th>
        <th scope="col" colspan="2" class="text-center">Kuantitas</th>
        <th scope="col" rowspan="2" class="text-center">Durasi Waktu Pengerjaan</th>
        <th scope="col" rowspan="2" class="text-center">Pemberi Tugas</th>
        <th scope="col" rowspan="2" class="text-center">Status Penyelesaian</th>
      </tr>
      <tr>
        <th scope="col" class="text-center">Volume</th>
        <th scope="col" class="text-center">Satuan</th>
      </tr>
      <tr>
        <th scope="col" class="text-center">(1)</th>
        <th scope="col" class="text-center">(2)</th>
        <th scope="col" class="text-center">(3)</th>
        <th scope="col" class="text-center">(4)</th>
        <th scope="col" class="text-center">(5)</th>
        <th scope="col" class="text-center">(6)</th>
        <th scope="col" class="text-center">(7)</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        foreach ($laporan_harian as $key) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $key['nama_aktivitas']; ?></td>
            <td><?= $key['volume']; ?></td>
            <td><?= $key['satuan']; ?></td>
            <td><?= $key['durasi']; ?></td>
            <td><?= $key['pemberi_kerja']; ?></td>
            <td>
              <?php
                switch ($key['status']) {
                  case 'tepat_waktu':
                    echo 'Tepat Waktu';
                    break;
                  case 'terlambat':
                    echo 'Terlambar';
                    break;
                  
                  default:
                    # code...
                    break;
                }
              ?>
            </td>
          </tr>
        <?php }
      ?>
    </tbody>
  </table>

  <table width="100%">
    <tr>
      <td width="50%">
        <br>
        <div class="text-center"><strong>Kepala BPS Kabupaten Subang</strong></div>
        <br><br><br>
        <div class="text-center"><strong><u><?= $kepala_bps['nama']; ?></u></strong></div>
        <div class="text-center">NIP. <?= $kepala_bps['nip']; ?></div>
      </td>
      <td width="50%">
        <div class="text-center">Subang, <?= tgl_indo($this->input->get('tanggal')); ?></div>
        <br><br><br><br>
        <div class="text-center"><strong><u><?= $this->session->nama; ?></u></strong></div>
        <div class="text-center">NIP. <?= $this->session->nip; ?></div>
      </td>
    </tr>
  </table>
</body>
</html>