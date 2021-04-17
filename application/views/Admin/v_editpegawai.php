<hr>
<div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" enctype ="multipart/form-data" method= "post" action ="<?php echo base_url()."index.php/Admin/Admin/do_editpegawai";?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" name= "nip" value="<?php echo $nip; ?>" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama" >
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                         <select name="jenis_kelamin" class='form-control' value = "<?php echo $jenis_kelamin; ?>">
                            <option value="Laki - Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option></select>
                      </div>
                    </div>
                     <div class="col-sm-6">

                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input  type = "text" class="form-control" rows="3" name="alamat" value ="<?php echo $alamat; ?>"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                 <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name = "tempatlahir" value="<?php echo $tempatlahir; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir" value="<?php echo $tanggallahir; ?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jabatan</label>
                         <select name="jabatan" class='form-control' value="<?php echo $jabatan; ?>">
                            < <?php 

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
                         <select name="namagolongan" class='form-control' value="<?php echo $namagolongan; ?>">
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
                        <input type="text" class="form-control" name = "username" value="<?php echo $username; ?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Akses</label>
                        <select name="akses" class='form-control' value="<?php echo $akses; ?>" >
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
                         <input type="file" class="form-control" name="foto" required="required" value="<?php echo $foto; ?>" />
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
