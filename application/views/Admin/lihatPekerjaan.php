<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Detail Alokasi Pekerjaan </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>kepala_seksi/alokasi_pekerjaan.html">Alokasi Pekerjaan</a></li>
            <li class="breadcrumb-item active">Detail Alokasi Pekerjaan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <br>
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <a href ="" type="button" data-toggle="modal" data-target="#ModalVerifikasi" class="btn btn-primary">Verifikasi</a>
          <div class="modal fade" id="ModalVerifikasi">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Verifikasi</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="<?= base_url('kepala_seksi/alokasi_pekerjaan/verifikasi/' . $id_bekerja); ?>" method="post">
                  <div class="modal-body">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pilihan" id="inlineRadio1" value="selesai">
                      <label class="form-check-label" for="inlineRadio1">Selesai</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pilihan" id="inlineRadio2" value="tidak_selesai">
                      <label class="form-check-label" for="inlineRadio2">Tidak Selesai</label>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Catatan</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="catatan">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                  </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
          </div>
        </div>
        <div class="card-body">     
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>      
          <table class="table table-bordered" id="dataTables-example">
            <thead>
              <tr class="nowrap">
                <th>No</th>
                <th>Kegiatan</th>
                <th>Aksi</th>
              </tr>   
            </thead>
            <tbody>
                <?php
                  $no = 1;
                  foreach ($detail_pekerjaan as $row) { ?>
                    <tr>
                      <td><?php echo $no++ ?></td>                                    
                      <td><?php echo $row['nama_kegiatan']; ?></td>
                      <td>
                        <?php
                          if ($row['hasil']) { ?>
                            <a href ="<?= base_url('assets/file_pekerjaan/' . $row['hasil']); ?>" class="btn btn-primary btn-xs badge-success"><i class="fa fa-eye"></i> Lihat</a>
                          <?php }
                        ?>
                      </td>
                    </tr>
                  <?php }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>