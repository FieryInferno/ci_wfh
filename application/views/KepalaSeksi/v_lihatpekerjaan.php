<section class="content">
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>
 <font face=""> Detail Pekerjaan </font>
</b></h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Home</a></li>
               <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Daftar Pekerjaan</a></li>
             
              <li class="breadcrumb-item active">Detail Pekerjaan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

      <div class="container-fluid">
           <div class="row">
                         <div class="col-sm-2">
                  

                         </div>
                          <div class="col-sm-2">
                        
                         </div>
                <div class="col-sm-2">
                        
                           <div class="col">
                <div class="float-left">
                   
               </div>
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
                
            </div>
 </div>
</div>

                        <div class="card-body">                      
                               <table class="table table-bordered" id="">
                                         <thead>


                                         <tr class="nowrap">
                                           <th>No</th>
                                  <th>Kegiatan</th>
                                    
                                    <th>Aksi</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                   
              
                <tr>
                                    <?php
    $no=1;
    foreach ($detail_pekerjaan as $row) { 
  ?>
                                    
                                   <td><?php echo $no++ ?></td>                                    
                              <td><?php echo $row->nama_kegiatan?></td>
                            <td>
                                <a href="edit_golongan/<?php echo $row->id ?>" title="">
                                    <li class="fa fa-pencil-alt" style="color: green;">
                                    
                                    </li>
                                </a>

                                <a href="hapus_golongan/<?php echo $row->id ?> "  onClick="return confirm('Apakah anda yakin ingin menghapus data golongan dengan id : <?php echo $row->id ?>');" title="">
                                     <li class="fa fa-trash" style="color: crimson;">
                                    
                                    </li>
                                </a> 
                                </td>
                                     </tr>
                           <?php
    }
    ?>

                                                                                </tbody>
                                                                                 
                                    </table>

            <!-- /.card - 
