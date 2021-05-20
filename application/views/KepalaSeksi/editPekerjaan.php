<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Edit Pekerjaan </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>kepala_seksi/pekerjaan.html">Pekerjaan</a></li>
            <li class="breadcrumb-item active">Edit Pekerjaan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-2">
        <div class="col">
          <div class="float-left"></div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="card">
        <form role="form" enctype ="multipart/form-data" method= "post" action ="<?= base_url('kepala_seksi/pekerjaan/edit/' . $id_pekerjaan); ?>">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label style="align-items: : right">Id Pekerjaan</label>
                  <input type="text" class="form-control" name= "id_pekerjaan" placeholder="id ..." value="<?= $id_pekerjaan; ?>" readonly>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Nama ..." value="<?= $nama_pekerjaan; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Jenis</label>
                  <select name="jenis" class='form-control'>
                    <option value="Bulanan" <?= $jenis == 'Bulanan' ? 'selected' : '' ; ?>>Bulanan</option>
                    <option value="Tahunan" <?= $jenis == 'Tahunan' ? 'selected' : '' ; ?>>Tahunan</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" name="submit" value="SIMPAN" class="btn-sm btn-primary float-left">
            <input type="reset"  value="RESET" class="btn-sm btn-danger">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

