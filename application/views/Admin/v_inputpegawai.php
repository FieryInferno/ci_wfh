
<div class="col-md-8">
  <br>
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" enctype ="multipart/form-data" method= "post" action ="<?php echo base_url()."index.php/Admin/Admin/doinputpegawai";?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" name= "nip" placeholder="NIP ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama ..." >
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                         <select name="jenis_kelamin" class='form-control'>
                            <option value="Laki - Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option></select>
                      </div>
                    </div>
                     <div class="col-sm-6">

                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" rows="3" name="alamat" placeholder="Alamat ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                 <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name = "tempatlahir" placeholder="Tempat ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir"  >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jabatan</label>
                         <select name="jabatan" class='form-control'>
                           <?php 

                $sql = $this->db->get('jabatan');
                foreach ($sql->result() as $key => $value) {
                  ?>
                            <option value='<?php echo $value->jabatan ?>'><?php echo $value->jabatan ?> </option>
                          

                  <?php
                }

               ?>

                        </select>
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Golongan</label>
                         <select name="namagolongan" class='form-control'>
                            <?php 

                $sql = $this->db->get('golongan');
                foreach ($sql->result() as $key => $value) {
                  ?>
                            <option value='<?php echo $value->pangkat ?>'><?php echo $value->pangkat ?> </option>
                          

                  <?php
                }

               ?>
                            </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username ..."  name = "username">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Password ..." >
                      </div>
                    </div>
                   <div class="col-sm-4">
                      <div class="form-group">
                        <label>Akses</label>
                         <select name="akses" class='form-control'>
                            <option value="fungsional statistik">Fungsional Statistik</option>
                            <option value="koordinator fungsi">Koordinator Fungsi</option>
                             <option value="admin">Admin</option>
                              <option value="Kasubbag TU">Kepala Sub Bagian Tata Usaha</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Foto</label>
                         <input type="file" class="form-control" name="foto" required="required" />
                      </div>
                    </div>    
                    </div>             
                     <div class="row">   
                    <div class="col-sm-2">
                      <input type="submit" name="submit" value="SIMPAN" class="btn-sm btn-primary float-left">
                    </div>
                   <div class="col-sm-2">
                      <input type="reset"  value="RESET" class="btn-sm btn-danger">
                    </div>
                    </div>

                </form>
              </div>

              <!-- /.card-body -->
            </div>

          </div>

            <!-- /.card - 
