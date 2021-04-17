
<div class="col-md-8">
  <br>
            <!-- general form elements disabled -->
            
              
         
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pekerjaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" enctype ="multipart/form-data" method= "post" action ="<?php echo base_url()."index.php/KepalaSeksi/KepalaSeksi/do_inputpekerjaan";?>">
                  <div class="row">


                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label style="align-items: : right">Id Pekerjaan</label>
                        <input type="text" class="form-control" name= "id_pekerjaan" placeholder="id ..." value="PK-<?php echo sprintf("%04s", $id_pekerjaan)?> " readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Nama ..." >
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis</label>
                         <select name="jenis" class='form-control'>
                            <option value="Bulanan">Bulanan</option>
                            <option value="Tahunan">Tahunan</option></select>
                      </div>
                    </div>
                     <div class="col-sm-6">

                      <!-- textarea -->
                      <div class="form-group">
                        <label></label>
                        <input type="hidden" class="form-control" rows="3" name="bagian" value = "<?php echo $_SESSION['jabatan'] ?>" placeholder="Alamat ..."></textarea>
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
