<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</head>
<body>
  <h3><b><font face=""> 
    Jadwal WFH dan WFO bulan 
    <?php
      switch ($jadwal[0]['bulan']) {
        case '01':
          echo 'Januari';
          break;
        case '02':
          echo 'Februari';
          break;
        case '03':
          echo 'Maret';
          break;
        case '04':
          echo 'April';
          break;
        case '05':
          echo 'Mei';
          break;
        case '06':
          echo 'Juni';
          break;
        case '07':
          echo 'Juli';
          break;
        case '08':
          echo 'Agustus';
          break;
        case '09':
          echo 'September';
          break;
        case '10':
          echo 'Oktober';
          break;
        case '11':
          echo 'November';
          break;
        case '12':
          echo 'Desember';
          break;
        
        default:
          # code...
          break;
      }
    ?> Tahun 2021
  </font></b></h3>
  <table class="table table-bordered" id="dataTables-example" style="
    font-size: 0.5rem;
">
    <thead>
      <tr class="nowrap">
        <th>Nama Pegawai</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
        <th>11</th>
        <th>12</th>
        <th>13</th>
        <th>14</th>
        <th>15</th>
        <th>16</th>
        <th>17</th>
        <th>18</th>
        <th>19</th>
        <th>20</th>
        <th>21</th>
        <th>22</th>
        <th>23</th>
        <th>24</th>
        <th>25</th>
        <th>26</th>
        <th>27</th>
        <th>28</th>
        <th>29</th>
        <th>30</th>
        <th>31</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($jadwal as $key) { ?>
          <tr>
            <td><?= $key['nama']; ?></td>
            <?php
              for ($i=1; $i < 32; $i++) { ?>
                <td
                  <?php
                    switch ($key[$i]) {
                      case 'wfh':
                        echo 'style="background-color:blue;"';
                        break;
                      case 'wfo':
                        echo 'style="background-color:green;"';
                        break;

                      default:
                        echo 'style="background-color:black;"';
                        break;
                    }
                  ?>></td>
              <?php }
            ?>
          </tr>
        <?php }
      ?>
    </tbody>
  </table>
</body>
</html>