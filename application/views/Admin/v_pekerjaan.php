
<section class="content">
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>
 <font face=""> Daftar Pekerjaan </font>
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
                          
                                          
                               <table class="table table-bordered" id="dataTables-example">
                                         <thead>
                                         <tr class="nowrap">
                                  <th>Nama</th>
                                      <th>Bagian</th>
                                          <th>Jenis</th>
                                              <th>Bulan</th>
                                                  <th>Tahun</th>
                                    
                                   
                                    <th>Aksi</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data->result() as $row) : ?>
                                    
                                                                      <tr>
                                <td><?php echo $row->nama_pekerjaan?></td>
                                 <td><?php echo $row->bagian?></td>
                                  <td><?php echo $row->jenis?></td>
                                   <td><?php echo $row->bulan?></td>
                                    <td><?php echo $row->tahun?></td>
                               
                               



                    

                            <td>
                                <a href="edit_jabatan/<?php echo $row->id ?>" title="">
                                    <li class="fa fa-pencil-alt">
                                    
                                    </li>
                                </a>

                                <a href="hapus_jabatan/<?php echo $row->id ?> "  onClick="return confirm('Apakah anda yakin ingin menghapus data jabatan dengan id : <?php echo $row->id ?>');" title="">
                                     <li class="fa fa-trash">
                                    
                                    </li>
                                </a> 
                                </td>
                                     </tr>
                            <?php endforeach; ?>
                                                

                                                                                </tbody>
                                    </table>

