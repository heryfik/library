<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilid 		= $_POST['id_staff'];

$ambilusername 	= $_POST['username'];

$ambilnama 	= $_POST['nama_staff'];

$ambilpassword 	= $_POST['password'];

$ambilemail = $_POST['email_staff'];

//simpan data ke database
$query = mysqli_query($koneksi,"insert into staff 
					(id_staff, username, nama_staff, password, email_staff)			
			values ('$ambilid', '$ambilusername', '$ambilnama', '$ambilpassword', '$ambilemail')");

header("location: data-staff.php");

}

?>