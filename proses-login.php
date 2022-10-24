<?php
require 'koneksi.php';
session_start();

if(isset($_POST['login']))
{
    $username 		= $_POST["username"];
    $password 		= $_POST["password"];
	
	$query 	=  mysqli_query($koneksi,"select * from staff WHERE username= '$username' and password = '$password' ");
	$data 	=  mysqli_fetch_array($query);
	
	$baris =  mysqli_num_rows($query);
	
	if($baris == "0")
    	{	
		header("location:index.php");
    	}else
	{
	$_SESSION['username'] 	= $data['username'];
        header("location:home.php");
	}
}
?>
