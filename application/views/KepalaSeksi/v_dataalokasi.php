<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Daftar Alokasi </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Data Alokasi</a></li>
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
                <button class="btn btn-primary float-left" data-toggle="modal" data-target="#modal-alokasi"><i class="fas fa-plus"></i> Data Alokasi Pekerjaan</button>
              </div>
            </div>
          </div>
        <br>
        <?php if ($this->session->pesan) echo $this->session->pesan; ?> 
        <table class="table table-bordered" id="dataTables-example">
          <thead>
            <tr class="nowrap">
              <th>No</th>
              <th>Tanggal</th>
              <th>Nama Pekerjaan</th>
              <th>Nama Pegawai</th>
              <th>Regional Pekerjaan</th>
              <th>Progress</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>   
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach ($alokasi_pekerjaan as $row) { ?>
                <tr>
                  <td><?php echo $no++ ?></td>                                    
                  <td><?php echo $row['tanggal']; ?></td>
                  <td><?php echo $row['nama_pekerjaan']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['lokasi']; ?></td>
                  <td><?php echo $row['progress']; ?> %</td>
                  <td>
                    <?php
                      switch ($row['status']) {
                        case 'menunggu_verifikasi': ?>
                          <span class="badge badge-warning">Menunggu Verifikasi</span>
                          <?php break;

                        case 'belum_selesai': ?>
                          <span class="badge badge-danger">Belum Selesai</span>
                          <?php break;

                        case 'selesai': ?>
                          <span class="badge badge-success">Selesai</span>
                          <?php break;
                        
                        default:
                          # code...
                          break;
                      }
                    ?>
                  </td>
                  <td>
                    <a href="<?= base_url('kepala_seksi/alokasi_pekerjaan/hapus/' . $row['id_bekerj']); ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data golongan dengan id : <?php echo $row['id_bekerja']; ?>');" title="Hapus" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a> 
                    <a href ="<?= base_url('kepala_seksi/alokasi_pekerjaan/lihat/' . $row['id_bekerja']); ?>" type="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>
              <?php }
            ?>  
          </tbody>                                                                           
        </table>
        <div class="modal fade" id="modal-alokasi">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Alokasi Pekerjaan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card-body">
                  <form role="form" method= "post" action ="<?= base_url(); ?>kepala_seksi/alokasi_pekerjaan.html">
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label style="align-items: : right">Id Alokasi Pekerjaan</label>
                          <input type="text" class="form-control" name= "id_bekerja" placeholder="id ..." value="BK-<?php echo sprintf("%04s", $id_bekerja)?> " readonly>
                          <input type="hidden" name="no_urut" value="<?= $id_bekerja; ?>">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Pegawai</label>
                          <select name="nama_pegawai" class='form-control' id="pegawai">
                            <option>Pilih Pegawai</option>
                            <?php 
                              $sql  = $this->db->get('pegawai');
                              foreach ($sql->result() as $key => $value) { ?>
                                <option value='<?php echo $value->id ?>'><?php echo $value->nama ?> </option>
                              <?php }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Nama Pekerjaan</label>
                          <select name="nama_pekerjaan" class='form-control'>
                            <option>Pilih Pekerjaan</option>
                            <?php 
                              $sql  = $this->db->get_where('pekerjaan', array('bagian' => $_SESSION['jabatan']));
                              foreach ($sql->result() as $key => $value) { ?>
                                <option value='<?php echo $value->id_pekerjaan ?>'><?php echo $value->nama_pekerjaan ?> </option>
                              <?php }
                            ?>
                          </select>
                        </div>
                      </div>
                      <br>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Bagian</label>
                          <input type="text" class="form-control" 
                          name= "bagian" placeholder="id ..." value=" <?php echo $_SESSION['jabatan']  ;?>" readonly>
                        </div>
                      </div>
                      <br>
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label style="align-items: : right">Tanggal</label>
                          <input type="date" name= "tanggal" placeholder="" onchange="cekTanggal(this)" id="tanggal">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Lokasi</label>
                          <select name="regional_pekerjaan" class='form-control' onchange="cekLokasi(this)" id="lokasi">
                            <option>Pilih lokasi</option>
                            <?php 
                              $sql  = $this->db->get('regional_pekerjaan');
                              foreach ($sql->result() as $key => $value) { ?>
                                <option value='<?php echo $value->id_regional ?>'><?php echo $value->lokasi ?> </option>
                              <?php }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>     
                </div>     
              </div>   
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>