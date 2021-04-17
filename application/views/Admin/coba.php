
<section class="content">
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>
 <font face="Calibri"> Daftar Pekerjaan </font>
</b></h3>
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
                         <div class="col-sm-2">
                        <label>Tahun</label>
                          <select name="tahun" class='form-control'>
                           <?php 

                $sql = $this->db->get('pekerjaan');
                foreach ($sql->result() as $key => $value) {
                  ?>
                            <option value='<?php echo $value->tahun ?>'><?php echo $value->tahun ?> </option>
                          

                  <?php
                }

               ?>
             </select>

                         </div>
                          <div class="col-sm-2">
                        <label>Bulan</label>
                          <select name="tahun" class='form-control'>
                           <?php 

                $sql = $this->db->get('pekerjaan');
                foreach ($sql->result() as $key => $value) {
                  ?>
                            <option value='<?php echo $value->tahun ?>'><?php echo $value->bulan ?> </option>
                          

                  <?php
                }

               ?>
             </select>
                         </div>
                <div class="col-sm-2">
                        <label>   Cari  </label>
                           <div class="col">
                <div class="float-left">
                   <a href="<?php echo base_url()."index.php/Admin/Admin/cari_pekerjaan"?> " button type="button" class="btn btn-primary float-left"><i class="fas fa-search"></i></a>
               </div>
            </div>
                         </div>
            </div>
                       </div>
                       
                           <br>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jumlah_ipds ?></h3>

                <center><h3><font face="Calibri">IPDS</font></h3></center>
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
                <h3><?= $jumlah_nas ?></h3>

              <center><h3><font face="Calibri">NAS</font></h3></center>
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
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $jumlah_distribusi ?></h3>

               <center><h3><font face="Calibri">Distribusi</font></h3></center>
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
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $jumlah_produksi ?></h3>

                <center><h3><font face="Calibri">Produksi</font></h3></center>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-edit"></i>
              </div>
              <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        