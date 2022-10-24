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
<script src="jquery.js"></script>

<script>
	$(document).ready(function(){
            
			$('#nama_anggota').change(function(){
            var ambil_id_anggota = $(this).val();
            
            $.ajax({
                type: 'POST',
                url : 'ambil-email-anggota.php',
                data: 'id_anggota='+ambil_id_anggota,
                success:function(response)
					{
                    $('#email_anggota').val(response);
					}
				});
			})
		
			$('#buku').change(function(){
				
            var ambil_id_buku = $(this).val();
            
            $.ajax({
                type: 'POST',
                url : 'ambil-data-buku2.php',
                data: 'id_buku='+ambil_id_buku,
                success: function (response) 
					{
					 var json = response,
					 obj = JSON.parse(json);
					
					 $('#pengarang_buku').val(obj.pengarang_buku);
					 $('#status_buku').val(obj.status_buku);
					}
				});
			});
    
	});
        
</script>
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
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
			<form method="POST" action="proses-tambah-trx-peminjaman.php">
                <div class="card-body">
                  <div class="form-group">
                    <label>No Peminjaman</label>
                    <input type="text" class="form-control" name="no_peminjaman" placeholder="No Peminjaman">
                  </div>
				  
				   <div class="form-group">
                    <label>Nama Anggota</label>
					<br>
                   <select name="anggota" id="nama_anggota"  class="form-control">
	
	<option> -- Pilih Anggota -- </option>
		<?php
		$query1= mysqli_query ($koneksi, "select * from anggota");
		while ($data1 = mysqli_fetch_array ($query1)) {
		?>
		<option value="<?php echo $data1['id_anggota']; ?>"> <?php echo $data1['id_anggota'] . " - " .  $data1['nama_anggota']; ?>
		</option>
		
		<?php } ?>
	</select> </div>
				  
                  <div class="form-group">
                    <label>Email Anggota</label><br> 
                    <input type="text" class="form-control" name="email_anggota" id="email_anggota" readonly placeholder="Email Anggota"> 
                  </div>
				  
				  <div class="form-group">
                    <label>Judul Buku</label> <br>
                    <select name="buku" id="buku"  class="form-control">
	<option> -- Pilih Buku -- </option>
		<?php
		$query2= mysqli_query ($koneksi, "select * from buku");
		while ($data2 = mysqli_fetch_array ($query2)) {
		?>
		<option value="<?php echo $data2['id_buku']; ?>"> <?php echo $data2['id_buku'] . " - " .  $data2['judul_buku']; ?>
		</option>
		<?php } ?>
	</select></div>
				  
				  <div class="form-group">
                    <label>Pengarang Buku</label>
                    <input type="text" class="form-control" name="pengarang_buku" id="pengarang_buku" placeholder="Pengarang Buku" readonly>
                  </div>
				  
				  <div class="form-group">
                    <label>Status Buku</label>
                    <input type="text" class="form-control" name="status_buku" id="status_buku" placeholder="Status Buku" readonly>
                  </div>
				 
				  
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="tambah" value="SIMPAN" class="btn btn-primary" >
                </div>
              </form>
            </div>
			
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
