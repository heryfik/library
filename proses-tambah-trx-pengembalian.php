<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Library</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
		<!-- Header Menu -->
	<?php include "header.php";?>
	
      <!-- Sidebar Menu -->
	  <?php include 'menu.php';?>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master Data - Peminjaman</h1>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Transaksi Pengembalian</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active">Transaksi Pengembalian</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Transaksi Pengembalian</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <?php

                                $id = $_GET['id'];
                                $query = mysqli_query($koneksi, "SELECT * FROM PEMINJAMAN
                                     JOIN anggota
                                     ON peminjaman.id_anggota = anggota.id_anggota 
                                     JOIN buku
                                     ON peminjaman.id_buku = buku.id_buku 
                                     WHERE no_peminjaman = '$id'");
                                $data = mysqli_fetch_array($query);
                                ?>
                                <form action="input-pengembalian.php" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Peminjaman</label>
                                            <input type="text" name="no_peminjaman" class="form-control" value="<?php echo $data['no_peminjaman']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Id Anggota</label>
                                            <input type="text" name="id_anggota" class="form-control" value="<?php echo $data['id_anggota']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Anggota</label>
                                            <input type="text" name="nama_anggota" class="form-control" value="<?php echo $data['nama_anggota']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Id Buku</label>
                                            <input type="text" name="id_buku" class="form-control" value="<?php echo $data['id_buku']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul Buku</label>
                                            <input type="text" name="judul_buku" class="form-control" value="<?php echo $data['judul_buku']; ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No. Pengembalian</label>
                                            <input type="text" name="no_pengembalian" class="form-control" maxlength="20" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Nama Staff</label>
                                            <select class="custom-select rounded-0" id="staff" name="staff">
                                                <option>-Pilih Staff-</option>
                                                <?php
                                                $query1 = mysqli_query($koneksi, "select * from staff");
                                                while ($data1 = mysqli_fetch_array($query1)) {
                                                ?>

                                                    <option value="<?php echo $data1['id_staff']; ?>"> <?php echo $data1['id_staff'] . " - " . $data1['nama_staff']; ?>
                                                    </option> <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="tambah" class="btn btn-primary">Dikembalikan</button>
                                        <a href="./index.php" class="btn btn-danger">Beranda</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
		
		
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
