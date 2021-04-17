<div class="modal fade" id="modal-alokasi">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Alokasi Pekerjaan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                  <form role="form" enctype ="multipart/form-data" method= "post" action ="<?php echo base_url()."index.php/KepalaSeksi/KepalaSeksi/do_inputpekerjaan";?>">
                  <div class="row">


                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label style="align-items: : right">Id Alokasi Pekerjaan</label>
                        <input type="text" class="form-control" name= "id_beke`rja" placeholder="id ..." value="BK-<?php echo sprintf("%04s", $id_bekerja)?> " readonly>
                      </div>
                    </div>
                    
                   <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pegawai</label>
                         <select name="jenis" class='form-control' onchange="changeValue(this.value)">
                            <option disabled="" selected=""> Pilih </option>
                            <?php 
                            $sql=mysql_query("select * from pegawai");
                            $jsArray= "var prdName = new array();\n";
                            while ($data=mysql_fetch_array($sql)){
                              echo '<option value="'.$data['id'].'">'.$data['id']. '</option> ';
                              $jsArray.= "prdName['".$data['id']."'] = {nama:'". addslashes($data['nama_pegawai'])."'};\n";

                            }
                            ?>

                            </select>
                      </div>
                    </div>
                    
                  
                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label style="align-items: : right">Nama Pegawai</label>
                        <input type="text" class="form-control" name= "nama_pegawai" placeholder="" value=" ">
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Pekerjaan</label>
                         <select name="nama_pekerjaan" class='form-control'>
                           <?php 

                $sql = $this->db->get_where('pekerjaan', array('bagian' => $_SESSION[jabatan]));
                foreach ($sql->result() as $key => $value) {
                  ?>
                            <option value='<?php echo $value->nama_pekerjaan ?>'><?php echo $value->nama_pekerjaan ?> </option>
                          

                  <?php
                }

               ?>

                        </select>
                      </div>
                    </div>
                    <br>
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label style="align-items: : right">Dari</label>
                        <input type="text" class="form-control" name= "dari" placeholder="id ..." value="<?php echo $_SESSION['nama']  ;?> " readonly>
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Bagian</label>
                         <input type="text" class="form-control" 
                         name= "dari" placeholder="id ..." value=" <?php echo $_SESSION['jabatan']  ;?>" readonly>
                      </div>
                    </div>
                    <br>
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label style="align-items: : right">Tanggal</label>
                        <input type="date" class="form-control" name= "dari" placeholder="" value="tanggal ">
                      </div>
                    </div>
                         <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label style="align-items: : right">Catatan</label>
                        <input type="text" class="form-control" name= "dari" placeholder="" value=" ">
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
                 <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>

          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <script type="text/javascript">
  <?php echo $jsArray;?>
  function changeValue(x){
    document.getElementById('nama').value=prdName[x].nama;
  };
  
</script>
          
      <!-- /.modal -->

            <!-- /.card - 
