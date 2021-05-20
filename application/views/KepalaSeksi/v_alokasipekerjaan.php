
<div class="col-md-8">
  <br>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Alokasi</h3>
    </div>
    <div class="card-body">
      <form role="form" enctype ="multipart/form-data" method= "post" action ="<?php echo base_url()."index.php/KepalaSeksi/KepalaSeksi/do_alokasipekerjaan";?>">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label style="align-items: : right">Id Alokasi Pekerjaan</label>
              <input type="text" class="form-control" name= "id_bekerja" placeholder="id ..." value="BK-<?php echo sprintf("%04s", $id_bekerja)?> " readonly>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Pegawai</label>
                <select name="id_pegawai" class='form-control'>
                  <?php 

      $sql = $this->db->get('pegawai');
      foreach ($sql->result() as $key => $value) {
        ?>
                  <option value='<?php echo $value->nama_pegawai ?>'><?php echo $value->nama_pegawai ?> </option>
                

        <?php
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
              <input type="text" class="form-control" name= "tanggal" id = "datepicker" placeholder=""  ">
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
          <div class="form-group">
              <label style="align-items: : right"></label>
              <input type="hidden" class="form-control" name= "status" placeholder="" value="Belum Selesai">
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