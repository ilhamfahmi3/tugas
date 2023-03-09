<?php
require 'functions.php';
$siswasa = query("SELECT * FROM tb_siswasa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Siswa SA</h1>

<a href="tambah.php">Tambah data siswa</a>
<br><br>
    
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1;?>
    <?php foreach( $siswasa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> | 
            <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"];?>" width="50px"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nis"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++?>
    <?php endforeach; ?>

</table>

</body>
</html>