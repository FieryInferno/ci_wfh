<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Detail Pekerjaan </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>pegawai/pekerjaan.html">Daftar Pekerjaan</a></li>
            <li class="breadcrumb-item active">Detail Pekerjaan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <br>
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="card">
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
                          <?php } else { ?>
                            <a href ="" type="button" data-toggle="modal" data-target="#ModalEdit<?php echo $row->id_detail_alokasi;?>" class="btn btn-primary btn-xs badge-success"><i class="fa fa-upload"></i> Submit</a>
                            <div class="modal fade" id="ModalEdit<?php echo $row->id_detail_alokasi;?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Hasil Pekerjaan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="card-body">
                                      <form role="form"  enctype ="multipart/form-data" method= "post" action ="<?= base_url('pegawai/pekerjaan/input_hasil') ; ?>">
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="form-group">
                                              <label>Hasil Pekerjaan</label>
                                              <input type="file" class="form-control" name="hasil" required="required" />
                                              <input type="hidden" name="id_detail_alokasi" value="<?= $row['id_detail_alokasi'];?>"/>
                                              <input type="hidden" name="id_bekerja" value="<?= $id_bekerja;?>"/>
                                            </div>
                                          </div>
                                        </div>     
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button> 
                                      </form>   
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                            </div>
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