<?php
include('koneksi.php');

$ambilid = $_GET['id'];
 
$query = mysqli_query($koneksi, "delete from buku where id_buku='$ambilid' ");
 
header('location: data-buku.php');

?>