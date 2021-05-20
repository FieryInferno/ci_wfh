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
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>kepala_seksi/pekerjaan.html">Daftar Pekerjaan</a></li>
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
                      <td><?php echo $row->nama_kegiatan?></td>
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal<?= $row->id_kegiatan; ?>" title="Edit">
                          <li class="fa fa-pencil-alt"></li>
                        </button>
                        <a class="btn btn-sm btn-danger" href="<?= base_url('kepala_seksi/pekerjaan/hapus_sub_pekerjaan/' . $id_pekerjaan . '/' . $row->id_kegiatan); ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data kegiatan <?php echo $row->nama_kegiatan ?>');" title="Hapus">
                          <li class="fa fa-trash" style="color : ;"></li>
                        </a> 
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $row->id_kegiatan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Sub Pekerjaan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="<?= base_url('kepala_seksi/pekerjaan/edit_sub_pekerjaan/' . $row->id_kegiatan); ?>" method="post">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label>Kegiatan</label>
                                    <input type="text" class="form-control" name="nama_kegiatan" placeholder="Masukan Nama Kegiatan" value="<?= $row->nama_kegiatan; ?>">
                                    <input type="hidden" name="id_pekerjaan" value="<?= $id_pekerjaan; ?>">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
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