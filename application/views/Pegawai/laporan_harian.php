<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><b>Laporan Harian</b></h3>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url()."Akademik/home_akademik"?>">Home</a></li>
          <li class="breadcrumb-item active">Laporan Harian</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col">
            <div class="float-left">
              <a href="<?= base_url()."pegawai/laporan_harian/tambah"?> " button type="button" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Tambah Laporan</a>
            </div>
          </div>
        </div>  
      </div>
      <div class="card-body"> 
        <?php if ($this->session->pesan) echo $this->session->pesan; ?>   
        <table class="table table-bordered" id="dataTables-example">
          <thead>
            <tr class="nowrap">
              <th>No</th>
              <th>Nama Aktivitas</th>
              <th>Satuan</th>  
              <th>Volume</th>
              <th>Durasi</th>
              <th>Pemberi Kerja</th>
              <th>Waktu</th>
              <th>Status</th>
            </tr>   
          </thead>
          <tbody>
            <?php 
              $no = 1; 
              foreach ($laporan as $row) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row->nama_aktivitas; ?></td>
                  <td><?= $row->satuan; ?></td>
                  <td><?= $row->volume; ?></td>
                  <td><?= $row->durasi; ?></td>
                  <td><?= $row->pemberi_kerja; ?></td>
                  <td><?= $row->waktu; ?></td>
                  <td><?= $row->status; ?></td>
                </tr>
              <?php endforeach; ?>
          </tbody>
        </table>