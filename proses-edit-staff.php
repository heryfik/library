<?php
include('koneksi.php');

if(isset($_POST['ubah']))
{
//tangkap data dari form

$ambilid 		= $_POST['id_staff'];

$ambilusername 	= $_POST['username'];

$ambilnama 	= $_POST['nama_staff'];

$ambilpassword 	= $_POST['password'];

$ambilemail = $_POST['email_staff'];


//update data di database sesuai id buku
$query = mysqli_query($koneksi, "UPDATE staff 
								SET username = '$ambilusername', nama_staff = '$ambilnama', password = '$ambilpassword', email_staff = '$ambilemail'
								WHERE id_staff ='$ambilid' ") ;

header("location: data-staff.php");
}
?>