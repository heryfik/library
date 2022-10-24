<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilid 		= $_POST['id_buku'];

$ambiljudul 	= $_POST['judul_buku'];

$ambilpengarang = $_POST['pengarang_buku'];

$ambilstatus	= $_POST['status_buku'];

//simpan data ke database
$query = mysqli_query($koneksi,"insert into buku 
					(id_buku, judul_buku, pengarang_buku, status_buku)			
			values ('$ambilid', '$ambiljudul','$ambilpengarang','$ambilstatus')");

header("location: data-buku.php");

}

?>