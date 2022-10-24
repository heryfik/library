<?php
include('koneksi.php');

if(isset($_POST['ubah']))
{
//tangkap data dari form

$ambilid 		= $_POST['id_anggota'];

$ambilnama 	= $_POST['nama_anggota'];

$ambilemail = $_POST['email_anggota'];


//update data di database sesuai id buku
$query = mysqli_query($koneksi, "UPDATE anggota 
								SET nama_anggota = '$ambilnama', email_anggota = '$ambilemail'
								WHERE id_anggota ='$ambilid' ") ;

header("location: data-member.php");
}
?>