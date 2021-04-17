<br>
<div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Jabatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" enctype ="multipart/form-data" method= "post" action ="<?php echo base_url()."index.php/Admin/Admin/do_editjabatan";?>">

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" value = "<?php echo $jabatan; ?>" name= "jabatan">
                      </div>
                    </div>
                   
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label></label>
                        <input type="hidden" class="form-control" value = "<?php echo $id; ?>" name= "id">
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
