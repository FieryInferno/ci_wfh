<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Daftar Pekerjaan </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Home</a></li>
            <li class="breadcrumb-item active">Daftar Pekerjaan</li>
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
        <form role="form" enctype ="multipart/form-data" method= "post" action ="<?= base_url(); ?>kepala_seksi/pekerjaan/tambah.html">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label style="align-items: : right">Id Pekerjaan</label>
                  <input type="text" class="form-control" name= "id_pekerjaan" placeholder="id ..." value="PK-<?= sprintf("%04s", $id_pekerjaan); ?>" readonly>
                  <input type="hidden" name="no_urut" value="<?= $id_pekerjaan; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Nama ..." >
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Jenis</label>
                  <select name="jenis" class='form-control'>
                    <option value="Bulanan">Bulanan</option>
                    <option value="Tahunan">Tahunan</option>
                  </select>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label></label>
                  <input type="hidden" class="form-control" rows="3" name="bagian" value = "<?php echo $_SESSION['jabatan'] ?>" placeholder="Alamat ..."></textarea>
                </div>
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

