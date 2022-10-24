<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilid 		= $_POST['id_anggota'];

$ambilnama 	= $_POST['nama_anggota'];

$ambilemail = $_POST['email_anggota'];

//simpan data ke database
$query = mysqli_query($koneksi,"insert into anggota 
					(id_anggota, nama_anggota, email_anggota)			
			values ('$ambilid', '$ambilnama','$ambilemail')");

header("location: data-anggota.php");

}

?>