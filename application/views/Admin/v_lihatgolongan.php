
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>
 <font face=""> Data Golongan </font>
</b></h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Home</a></li>
             
              <li class="breadcrumb-item active">Data Golongan</li>
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
                   <a href="<?php echo base_url()."index.php/Admin/Admin/input_golongan"?> " button type="button" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Data Golongan</a>
               </div>
            </div>
 </div>
</div>

                        <div class="card-body">
                          
                                          
                               <table class="table table-bordered" id="dataTables-example">
                                         <thead>


                                         <tr class="nowrap">
                                           <th>No</th>
                                  <th>Golongan</th>
                                    <th>Pangkat</th>  
                                   
                                    <th>Aksi</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                   
              
                <tr>
                                    <?php
                                     $no = 1; foreach ($data->result() as $row) : ?>
                                    
                                   <td><?php echo $no++ ?></td>                                    
                                <td><?php echo $row->golongan?></td>
                                <td><?php echo $row->pangkat?></td>
                               



                    

                            <td>
                                <a class="btn btn-sm btn-warning" style="color : ;" type="button" href="edit_golongan/<?php echo $row->id ?>" title="">
                                    <li class="fa fa-pencil-alt" style="">
                                    
                                    </li>
                                </a>

                                <a class="btn btn-sm btn-danger"  type="button" href="hapus_golongan/<?php echo $row->id ?> "  onClick="return confirm('Apakah anda yakin ingin menghapus data golongan dengan id : <?php echo $row->id ?>');" title="">
                                     <li class="fa fa-trash" style="">
                                    
                                    </li>
                                </a> 
                                </td>
                                     </tr>
                            <?php endforeach; ?>
                                                

                                                                                </tbody>
                                                                                 
                                    </table>

                                   