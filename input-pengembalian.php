<?php
include 'koneksi.php';
if(isset($_POST['tambah']))
{ 
$tangkap_no_peminjaman      = $_POST['no_peminjaman'];
$tangkap_no_pengembalian    = $_POST['no_pengembalian'];
$tangkap_id = $_POST['staff'];
    
    $query =mysqli_query ($koneksi, "insert into pengembalian(no_pengembalian, no_peminjaman, id_staff)
    values('$tangkap_no_pengembalian', '$tangkap_no_peminjaman', '$tangkap_id')");
    
    $query2 = mysqli_query ($koneksi, "UPDATE peminjaman SET status_pengembalian = '1' WHERE no_peminjaman = '$tangkap_no_peminjaman'");
    
    header("location: lap-pengembalian.php");
}
