
<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Jadwal Bekerja <?php echo $_SESSION['nama']  ;?></font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Home</a></li>
            <li class="breadcrumb-item active">Daftar Jadwal</li>
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
            <div class="col"></div>
          </div>
          <div class="card-body">
            <table class="table table-bordered" id="dataTables-example">
              <thead>
                <tr class="nowrap">
                  <th>Tanggal</th>
                  <th>Jadwal</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  for ($i=1; $i < 31; $i++) { 
                    if ($jadwal[$i] !== NULL && $jadwal[$i] !== 'libur') { ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $jadwal[$i]; ?></td>
                      </tr>                      
                    <?php }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
