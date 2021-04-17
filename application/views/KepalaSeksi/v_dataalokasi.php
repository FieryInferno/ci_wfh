<section class="content">
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>
 <font face=""> Daftar Alokasi </font>
</b></h3>
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
                   <a href="" button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#modal-alokasi"><i class="fas fa-plus"></i> Data Alokasi Pekerjaan</a>
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

                                     <th>Status</th>
                                    <th>Aksi</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                   
              
                <tr>
                                    <?php
    $no=1;
    foreach ($alokasi_pekerjaan as $row) { 
  ?>
                                    
                                   <td><?php echo $no++ ?></td>                                    
                              <td><?php echo $row->tanggal?></td>
                              <td><?php echo $row->nama_pekerjaan?></td>
                              <td><?php echo $row->nama_pegawai?></td>
                     <td><?php echo $row->regional_pekerjaan?></td>
                      <td><?php if($row->status == "Menunggu Verifikasi"){ ?>
                             <span class="badge badge-danger">Menunggu Verifikasi</span>
                         <?php } elseif ($row->status == "Belum Selesai"){ ?>
                             <span class="badge badge-warning" style="color:red;">Belum Selesai</span>
                         <?php } else { ?>
                             <span class="badge badge-success">Selesai</span>
                         <?php } ?></td>
                                  
                
                            <td>
                                <a href="verifikasi_pekerjaan/<?php echo $row->id_bekerja ?>" title="">
                                    <li class="fa fa-pencil-checklist" style="color: green;">
                                    
                                    </li>
                                </a>

                                <a href="lihat_alokasi/<?php echo $row->id_bekerja ?> "  onClick="return confirm('Apakah anda yakin ingin menghapus data golongan dengan id : <?php echo $row->id ?>');" title="">
                                     <li class="fa fa-eye" >
                                    
                                    </li>
                                </a> 
                                </td>
                                     </tr>
                           <?php
    }
    ?>

                                                                                                                   
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
                  <form role="form" method= "post" action ="<?php echo base_url()."index.php/KepalaSeksi/KepalaSeksi/do_alokasipekerjaan";?>">
                  <div class="row">


                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label style="align-items: : right">Id Alokasi Pekerjaan</label>
                        <input type="text" class="form-control" name= "id_bekerja" placeholder="id ..." value="BK-<?php echo sprintf("%04s", $id_bekerja)?> " readonly>
                      </div>
                    </div>
                    
                   <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pegawai</label>
                         <select name="nama_pegawai" class='form-control'>
                          <?php 

                $sql = $this->db->get('pegawai');
                foreach ($sql->result() as $key => $value) {
                  ?>
                            <option value='<?php echo $value->nama ?>'><?php echo $value->nama ?> </option>
                          

                  <?php
                }

               ?>


                        </select>
                      </div>
                    </div>
                    
                  
                  
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Pekerjaan</label>
                         <select name="nama_pekerjaan" class='form-control'>
                           <?php 

                $sql = $this->db->get_where('pekerjaan', array('bagian' => $_SESSION[jabatan]));
                foreach ($sql->result() as $key => $value) {
                  ?>
                            <option value='<?php echo $value->nama_pekerjaan ?>'><?php echo $value->nama_pekerjaan ?> </option>
                          

                  <?php
                }

               ?>

                        </select>
                      </div>
                    </div>
                    <br>
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label style="align-items: : right">Dari</label>
                        <input type="text" class="form-control" name= "dari" placeholder="id ..." value="<?php echo $_SESSION['nama']  ;?> " readonly>
                      </div>
                    </div>
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
                        <input type="text"  id = "datepicker" name= "tanggal" placeholder="" >
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Lokasi</label>
                         <select name="regional_pekerjaan" class='form-control'>
                          <?php 

                $sql = $this->db->get('regional_pekerjaan');
                foreach ($sql->result() as $key => $value) {
                  ?>
                            <option value='<?php echo $value->lokasi ?>'><?php echo $value->lokasi ?> </option>
                          

                  <?php
                }

               ?>


                        </select>
                      </div>
                    </div>
                         <div class="col-sm-6">
                      <!-- text input -->
                      
                    </div>
                    <div class="form-group">
                        <label style="align-items: : right"></label>
                        <input type="hidden" class="form-control" name= "status" placeholder="" value="Belum Selesai">
                      </div>    
                    </div>             
                     

                
                 <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
</form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
     
          
      <!-- /.modal -->

            <!-- /.card - 
