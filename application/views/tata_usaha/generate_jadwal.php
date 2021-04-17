<div class="col-md-8">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Input Laporan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form" enctype ="multipart/form-data" method="post" action ="<?= base_url(); ?>tata_usaha/jadwal/generate">
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Pilih Bulan</label>
              <select class="form-control" name="bulan">
                <option>Pilih Bulan</option>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <input type="submit" name="submit" value="GENERATE" class="btn-sm btn-primary">
          </div>
        </div>
      <!-- /.card-body -->
      </div>
    </form>
  </div>
</div>
