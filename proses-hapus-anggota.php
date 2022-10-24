<?php
include('koneksi.php');

$ambilid = $_GET['id'];
 
$query = mysqli_query($koneksi, 
	"DELETE FROM anggota WHERE id_anggota='$ambilid' ");
 
header('location: data-anggota.php');

?>