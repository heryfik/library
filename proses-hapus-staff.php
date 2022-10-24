<?php
include('koneksi.php');

$ambilid = $_GET['id'];
 
$query = mysqli_query($koneksi, 
	"DELETE FROM staff WHERE id_staff='$ambilid' ");
 
header('location: data-staff.php');

?>