
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>
 <font> Data Pegawai </font>
</b></h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Home</a></li>
             
              <li class="breadcrumb-item active">Data Pegawai</li>
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
                   <a href="<?php echo base_url()."index.php/Admin/Admin/input_pegawai"?> " button type="button" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Data Pegawai</a>
               </div>
            </div>
 </div>
</div>

                        <div class="card-body">
                          
                                          
                               <table class="table table-bordered" id="dataTables-example">
                                         <thead>
                                         <tr class="nowrap">
                                          <th>No</th>
                                  <th>NIP</th>
                                    <th>Nama</th>  
                                    <th>J. Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jabatan</th>
                                      <th>Golongan</th>
                                       <th>Username</th>
                                        <th>Password</th>
                                         <th>Akses</th>
                                         <th>Foto</th>
                                    <th>Aksi</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                    <?php 
                                     $no = 1; foreach ($data->result() as $row) : ?>

                                    
                                                <tr>
                                 <td><?php echo $no++ ?></td>
                                <td><?php echo $row->nip?></td>
                                <td><?php echo $row->nama?></td>
                                <td><?php echo $row->jenis_kelamin?></td>
                                <td><?php echo $row->alamat?></td>
                                <td><?php echo $row->tempatlahir ?></td>
                                <td><?php echo $row->tanggallahir?></td>
                                <td><?php echo $row->jabatan?></td>
                                 <td><?php echo $row->namagolongan?></td>
                                   <td><?php echo $row->username?></td>
                                  <td><?php echo $row->password?></td>
                                    <td><?php echo $row->akses?></td>
                                    <td><img src="<?php echo base_url().'assets/img/'.$row->foto;?>" width="150px" alt="">
                                    </td>

                            <td>
                                <a class="btn btn-sm btn-warning" href="edit_pegawai/<?php echo $row->id ?>" title="">
                                    <li class="fa fa-pencil-alt">
                                    
                                    </li>
                                </a>

                                <a class="btn btn-sm btn-danger" href="hapus_pegawai/<?php echo $row->id ?>" title="" onClick="return confirm('Apakah anda yakin ingin menghapus data pegawai dengan id : <?php echo $row->id ?>');">
                                     <li class="fa fa-trash">
                                    
                                    </li>
                                </a> 
                                </td>
                                     </tr>
                            <?php endforeach; ?>
                                    </table>

                                   