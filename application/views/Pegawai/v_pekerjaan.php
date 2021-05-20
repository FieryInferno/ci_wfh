<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> List Pekerjaan  <?php echo $_SESSION['nama']  ;?></font></b></h3>
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
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header"></div>
          <div class="card-body">
            <?php if ($this->session->pesan) echo $this->session->pesan; ?>
            <table class="table table-bordered" id="dataTables-example">
              <thead>
                <tr class="nowrap">
                  <th>No</th>       
                  <th>Nama</th>
                  <th>Lokasi</th>
                  <th>Progress</th>
                  <th>Status</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>   
              </thead>
              <tbody>
                <?php
                  $no=1;
                  foreach ($pekerjaan as $row) { ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_pekerjaan']; ?></td>
                      <td><?php echo $row['lokasi']; ?></td>
                      <td><?php echo $row['progress']; ?> %</td>
                      <td>
                        <?php if($row['status'] == "menunggu_verifikasi") { ?>
                          <span class="badge badge-warning">Menunggu Verifikasi</span>
                        <?php } elseif ($row['status'] == "belum_selesai") { ?>
                          <span class="badge badge-danger" style="color:red;">Belum Selesai</span>
                        <?php } else { ?>
                          <span class="badge badge-success">Selesai</span>
                        <?php } ?>
                      </td>
                      <td><?php echo $row['tanggal']; ?></td>
                      <td>
                        <a href ="<?= base_url('pegawai/pekerjaan/lihat/' . $row['id_bekerja']); ?>" type="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Lihat</a>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>