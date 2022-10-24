<?php

$server 	= "localhost";
$user 		= "libray";
$password 	= "123456";
$db 		= "library";
$koneksi 	= mysqli_connect($server, $user, $password, $db);
if(!$koneksi)
{
	echo "Tidak Terdeteksi";
}
?>