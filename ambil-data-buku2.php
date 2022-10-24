<?php
    include 'koneksi.php';
    
    $tangkap_id_buku = $_POST['id_buku'];
    $query = mysqli_query($koneksi, "SELECT * FROM buku where id_buku = '$tangkap_id_buku' ");
    
    
	$data = mysqli_fetch_array($query);
		
	$data = array(
		'pengarang_buku'  	=>  $data['pengarang_buku'],
		'status_buku'  		=>  $data['status_buku'],
		);
		
	echo json_encode($data);

?>