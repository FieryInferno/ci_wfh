
<section class="content">
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>
 <font face=""> List Pekerjaan  <?php echo $_SESSION['nama']  ;?></font>
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
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                
            </div>
 </div>

                        <div class="card-body">
                          
                                          
                               <table class="table table-bordered" id="dataTables-example">
                                         <thead>
                                         <tr class="nowrap">
                                     <th>No</th>       
                                  <th>Nama</th>
                                   <th>Lokasi</th>
                                      <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                    <?php
    $no=1;
    foreach ($pekerjaan as $row) { 
  ?>
                                    
                                                                      <tr>
                               <td><?php echo $no++ ?></td>
                                <td><?php echo $row->nama_pekerjaan?></td>
                                <td><?php echo $row->regional_pekerjaan?></td>
                                 <td><?php if($row->status == "Menunggu Verifikasi"){ ?>
                             <span class="badge badge-danger">Menunggu Verifikasi</span>
                         <?php } elseif ($row->status == "Belum Selesai"){ ?>
                             <span class="badge badge-warning" style="color:red;">Belum Selesai</span>
                         <?php } else { ?>
                             <span class="badge badge-success">Selesai</span>
                         <?php } ?></td>
                                  
                               
                                <td><?php echo $row->tanggal?></td>



                    

                            <td>
                               <a href ="" type="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Lihat</a>
                               <a href ="" type="button" data-toggle="modal" data-target="#ModalEdit<?php echo $id_bekerja;?>" class="btn btn-primary btn-xs badge-success"><i class="fa fa-upload"></i> Submit</a>
                                </td>
                                     </tr>
               <?php
    }
?>   

                                           
<div class="modal fade" id="ModalEdit<?php echo $id_bekerja;?>">
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
                <form role="form"  enctype ="multipart/form-data"  method= "post" action ="<?php echo base_url()."index.php/Pegawai/Pegawai/input_hasil";?>">
                  <div class="row">


                  
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Hasil Pekerjaan</label>
                         <input type="file" class="form-control" name="hasil" required="required" />
                    
                     <input type="hidden" class="form-control" name="id_bekerja" value = "<?php echo $id_bekerja;?> " required="required" />
                   
                     <div class="col-sm-6">

                      <!-- textarea -->
                      <div class="form-group">
                        <label></label>
                        <input type="hidden" class="form-control" rows="3" name="status" value = "Menunggu Verifikasi" placeholder=""></textarea>
                      </div>
                    </div>  
                    </div>         
                </div>
              </form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
      </div>
      
    </table>

        <!-- /.modal-dialog

                                                                                </tbody>
                                    </table>
