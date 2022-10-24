<?php include('koneksi.php') ?>

<html>
<head>
<title>Belajar PHP - MySQL</title>
</head>

<body>
<h1>Laporan Transaksi Peminjaman <a href="home.php">(Back to Home)</a></h1>

<a href="trx-peminjaman.php">+ Tambah Peminjaman</a>

<table border="1" >
    <thead>
        <tr>
            <th>No.</th>
            <th>No Peminjaman</th>
            <th>Id Anggota</th>
            <th>Nama Anggota</th>
            <th>Id Buku</th>
            <th>Nama Buku</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman
									JOIN anggota ON peminjaman.id_anggota 	= anggota.id_anggota
									JOIN buku 	 ON peminjaman.id_buku		= buku.id_buku
									");

    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['no_peminjaman']; ?></td>
            <td><?php echo $data['id_anggota']; ?></td>
            <td><?php echo $data['nama_anggota']; ?></td>
            <td><?php echo $data['id_buku']; ?></td>
            <td><?php echo $data['judul_buku']; ?></td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
</body>
</html>
