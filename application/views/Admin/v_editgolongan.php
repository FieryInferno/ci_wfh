
<div class="col-md-8">
  <br>
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Golongan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" enctype ="multipart/form-data" method= "post" action ="<?php echo base_url()."index.php/Admin/Admin/do_editgolongan";?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Pangkat</label>
                        <input type="text" class="form-control" name= "pangkat" value="<?php echo $pangkat; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Golongan</label>
                        <input type="text" class="form-control" name= "golongan" value="<?php echo $golongan; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label></label>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" >
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
