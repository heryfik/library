<?php
include('koneksi.php');

if(isset($_POST['ubah']))
{
//tangkap data dari form

$ambilid 		= $_POST['id_buku'];

$ambiljudul 	= $_POST['judul_buku'];

$ambilpengarang = $_POST['pengarang_buku'];

$ambilstatus	= $_POST['status_buku'];

//update data di database sesuai id buku
$query = mysqli_query($koneksi, "UPDATE buku 
								SET judul_buku = '$ambiljudul', pengarang_buku = '$ambilpengarang', status_buku = '$ambilstatus'
								WHERE id_buku ='$ambilid' ") ;

header("location: data-buku.php");
}
?>