
<section class="content">
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
<h3><b>
 <font face="Times New Roman"> Selamat Bekerja   <?php echo $_SESSION['nama'] ;?> (<?php echo $_SESSION['akses'] ;?>)</font>
</b></h3>
</div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Home</a></li>
             
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $total ?></h3>

                <center><h4><font face="Calibri">Total Pekerjaan Pegawai</font></h4></center>
                 <div class="icon">
                <i class="nav-icon fas fa-edit"></i>
              </div>
              </div>
              <a href="<?php echo base_url()."index.php/C_Pekerjaan/lihatpekerjaan"?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $selesai ?></h3>

              <center><h4><font face="Calibri"> Pekerjaan Terselesaikan</font></h4></center>
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
            <div class="small-box" style="background-color: orange; color : white; ">
              <div class="inner">
                <h3><?= $belumselesai ?></h3>

               <center><h4><font face="Calibri">Pekerjaan Belum Selesai</font></h4></center>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-edit"></i>
              </div>
              <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
        </div>
        