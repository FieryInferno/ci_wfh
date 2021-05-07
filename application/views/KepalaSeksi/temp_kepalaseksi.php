<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPEL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/bpslogo.png" type="image/x-icon" />
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.css">
   <!-- Bootstrap Core CSS -->
 <!-- DataTables CSS -->
    

  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" role="button" href="#" data-widget="pushmenu"><i style = "color = : #339af0;" id= "icon" class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="index3.html"><font size = "4" >Sistem Informasi Pelaporan dan Monitoring Pekerjaan</font></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item dropdown-footer" href="#">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown">
            <font>  <?php echo $_SESSION['akses']  ;?></font>
          <img src="<?php echo base_url(); ?>assets/img/<?php echo $_SESSION['foto'] ;?>" class="img-circle" alt="User Image" width="25px" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">
              <img src="<?php echo base_url(); ?>assets/img/<?php echo $_SESSION['foto'] ;?>" width = "100px" class="img-circle" alt="User Image">
            </span>
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url()."index.php/C_Awal/profil"?>">
              <i class="fas fa-user"></i> Profile
              <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item dropdown-footer" href="<?php echo base_url()."index.php/Logout/index"?>">Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar elevation-4 sidebar-light-primary">
      <a href="../../index3.html" class="brand-link">
        <img src="<?php echo base_url();?>assets/img/bpslogo.png" alt="AdminLTE Logo" width="60px" height= "50px" style="opacity: .8">
        <span class="brand-text font-weight-light"> <font size = "5" face= "Tahoma ">SIMPEL BPS</font></span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo base_url()."index.php/KepalaSeksi/KepalaSeksi/index"?>" class="nav-link">
                <i class="nav-icon fas fa-home" style="color :#339af0;"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="<?php echo base_url()."index.php/KepalaSeksi/KepalaSeksi/daftar_pekerjaan"?>" class="nav-link">
                <i class="nav-icon fas fa-edit" style="color :#339af0;"></i>
                <p>
                  Daftar Pekerjaan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>kepala_seksi/alokasi_pekerjaan" class="nav-link">
                <i class="nav-icon fas fa-edit" style="color :#339af0;"></i>
                <p>
                  Alokasi Pekerjaan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url()."index.php/KepalaSeksi/KepalaSeksi/jadwalpekerjaan"?>" class="nav-link">
                <i class="nav-icon fas fa-inbox" style="color :#339af0;"></i>
                <p>
                  Jadwal WFH dan WFO
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url()."index.php/KepalaSeksi/KepalaSeksi/buatlaporan"?>" class="nav-link">
                <i class="nav-icon fas fa-inbox" style="color :#339af0;"></i>
                <p>
                  Buat Laporan
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="content-wrapper">
      <?php $this->load->view($content) ?>
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="<?php echo base_url();?>assets/http://adminlte.io">Pani Sri Mulyani</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.4
      </div>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <!-- jQuery -->
  <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url();?>assets/p  lugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url();?>assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url();?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url();?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url();?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url();?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url();?>assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/moment.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true
      });
    });
    
    $( function(){
      $("#datepicker").datepicker({
        minDate: moment().add('d', 1).toDate(),
      });
    });
    
    function cekTanggal(data) {
      let tanggal         = new Date(data.value);
      let tanggalSekarang = new Date();
      if (tanggal < tanggalSekarang) {
        alert('Tidak boleh memilih tanggal yang sudah lewat');
        $(data).val(tanggalSekarang);
      }
    }

    function cekLokasi(data) {
      let id_pegawai  = $('#pegawai').val();
      let tanggal     = $('#tanggal').val();
      let lokasi      = data.value;
      $.ajax({
        method  : "POST",
        url     : "<?= base_url(); ?>kepala_seksi/cek_pekerjaan_pegawai",
        data    : { 
          id_pegawai  : id_pegawai, 
          tanggal     : tanggal 
        },
        success : function (result) {
          if (lokasi !== result.regional_pekerjaan) {
            alert('Pegawai sudah memiliki pekerjaan lain');
            $('#lokasi').val('');
          }
        }
      })
    }
  </script>
</body>
</html>
