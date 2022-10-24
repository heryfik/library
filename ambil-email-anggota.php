<?php
include 'koneksi.php';

$tangkap_id_anggota = $_POST['id_anggota'];

$query = mysqli_query($koneksi, "SELECT * FROM anggota where id_anggota = '$tangkap_id_anggota' ");

$data = mysqli_fetch_array($query);

echo $data['email_anggota'];

?>