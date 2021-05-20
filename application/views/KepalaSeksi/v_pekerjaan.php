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
        <div class="card-header">
          <div class="row">
            <div class="col">
              <div class="float-left">
                <a href="<?= base_url(); ?>kepala_seksi/pekerjaan/tambah.html" button type="button" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Data Pekerjaan</a>
              </div>
              <div class="float-sm-right">
                <a href="" button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Sub Pekerjaan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?php if ($this->session->pesan) echo $this->session->pesan; ?>   
          <table class="table table-bordered" id="dataTables-example">
            <thead>
              <tr class="nowrap">
                <th>ID</th>
                <th>Nama</th>
                <th>Bagian</th>
                <th>Jenis</th>
                <th>Aksi</th>
              </tr>   
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($pekerjaan as $row) { ?>
                  <tr>
                    <td><?php echo $row->id_pekerjaan?></td>
                    <td><?php echo $row->nama_pekerjaan?></td>
                    <td><?php echo $row->bagian?></td>
                    <td><?php echo $row->jenis?></td>
                    <td>
                      <a class="btn btn-sm btn-warning" href="<?= base_url('kepala_seksi/pekerjaan/edit/' . $row->id_pekerjaan); ?>" title="Edit">
                        <li class="fa fa-pencil-alt" style="color : ;"></li>
                      </a>
                      <a class="btn btn-sm btn-primary" href="lihat_pekerjaan/<?php echo $row->id_pekerjaan ?> "  title="Lihat">
                        <li class="fa fa-eye" ></li>
                      </a> 
                      <a class="btn btn-sm btn-danger" href="hapus_jabatan/<?php echo $row->id ?> "  onClick="return confirm('Apakah anda yakin ingin menghapus data jabatan dengan id : <?php echo $row->id ?>');" title="Hapus">
                        <li class="fa fa-trash" style="color : ;"></li>
                      </a> 
                    </td>
                  </tr>
                <?php } 
              ?>
              <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Sub Pekerjaan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form role="form" method="post" action="<?= base_url(); ?>kepala_seksi/pekerjaan/input_sub_pekerjaan.html">
                      <div class="modal-body">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Nama Pekerjaan</label>
                                <select name="id_pekerjaan" class='form-control'>
                                  <?php
                                    $sql  = $this->db->get_where('pekerjaan', [
                                      'bagian'  => $this->session->jabatan
                                    ]);
                                    foreach ($sql->result() as $key => $value) { ?>
                                      <option value="<?= $value->id_pekerjaan ?>"><?= $value->nama_pekerjaan; ?></option>
                                    <?php }
                                  ?>
                                </select>
                              </div>
                            </div>
                            <br>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" class="form-control" name="nama_kegiatan" placeholder="" >
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label></label>
                                <input type="hidden" class="form-control" rows="3" name="bagian" value = "<?php echo $_SESSION['akses'] ?>" placeholder="Alamat ..."></textarea>
                              </div>
                            </div>  
                          </div> 
                        </div>        
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>  
                  </div>
                </div>
              </div>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

