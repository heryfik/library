<?php
include "koneksi.php";

if(isset($_POST['tambah']))
{
	$tangkap_no_peminjaman 	= $_POST['no_peminjaman'];
	$tangkap_anggota 		= $_POST['anggota'];
	$tangkap_buku 			= $_POST['buku'];
	
$query = mysqli_query ($koneksi, "insert into peminjaman
					(no_peminjaman,id_anggota, id_buku)
					values('$tangkap_no_peminjaman', '$tangkap_anggota', '$tangkap_buku')");

header ("location: laporan-peminjaman.php");
}
?>
