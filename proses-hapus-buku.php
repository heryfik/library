<?php
include('koneksi.php');

$ambilid = $_GET['id'];
 
$query = mysqli_query($koneksi, 
	"DELETE FROM buku WHERE id_buku='$ambilid' ");
 
header('location: lihat-buku.php');

?>