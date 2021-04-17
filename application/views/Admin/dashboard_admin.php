<br>
<center><h3><b>
 <font face=""> Selamat Bekerja   <?php echo $_SESSION['nama']  ;?> (<?php echo $_SESSION['akses'] ;?>)</font>
</b></h3>
<hr>
</center>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jumlah_pegawai ?></h3>

                <p>Jumlah Pegawai</p>
                 <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              </div>
              <a href="<?php echo base_url()."index.php/Admin/Admin/tabel_pegawai"?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>16</h3>

                <p>Jabatan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-edit"></i>
              </div>
              <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: orange; color: white;">
              <div class="inner">
                <h3>44</h3>

                <p>Golongan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-copy"></i>
              </div>
              <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>