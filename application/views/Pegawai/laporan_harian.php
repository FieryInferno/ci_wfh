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
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i> Cetak</button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Harian</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="<?= base_url(); ?>pegawai/laporan_harian/cetak" method="get">
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Tanggal</label>
                          <input type="date" class="form-control" name="tanggal" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Cetak</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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