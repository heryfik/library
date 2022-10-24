<?php

$server 	= "localhost";
$user 		= "libray";
$password 	= "library";
$db 		= "library";
$koneksi 	= mysqli_connect($server, $user, $password, $db);
if(!$koneksi)
{
	echo "Tidak Terdeteksi";
}
?>