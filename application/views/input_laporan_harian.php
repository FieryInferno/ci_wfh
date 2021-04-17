<div class="col-md-8">
  <br>
  <!-- general form elements disabled -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Input Laporan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <?php if ($this->session->status_laporan) echo $this->session->status_laporan; ?>
      <form role="form" enctype ="multipart/form-data" method="post" action ="<?php echo base_url()."Pegawai/Pegawai/input_laporan_harian";?>">
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Nama Aktivitas</label>
              <input type="text" class="form-control" name="nama_aktivitas" placeholder="Nama Aktivitas">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Satuan</label>
              <input type="text" class="form-control" name="satuan" placeholder="Satuan">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Volume</label>
              <input type="text" class="form-control" name="volume" placeholder="Volume">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Durasi</label>
              <input type="text" class="form-control" name="durasi" placeholder="Durasi">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Pemberi Kerja</label>
              <input type="text" class="form-control" name="pemberi_kerja" placeholder="Pemberi Kerja">
            </div>
          </div>   
          <div class="row">   
            <div class="col-6">
              <input type="submit" name="submit" value="SIMPAN" class="btn-sm btn-primary">
            </div>
            <div class="col-6">
              <input type="reset"  value="RESET" class="btn-sm btn-danger">
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>