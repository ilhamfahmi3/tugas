<?php
//cara lama
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar_xii");

//ambil data dari tabel siswa / query data siswa
$result = mysqli_query($conn, "SELECT * FROM tb_siswasa");

//ambil data(fetch)siswa dari objek resolt
//mysqli_fetch_row() //mengembalikan array numerik
//mysqli_fetch_assoc() //mengembalikqan array associative
//mysqli_fetch_array() //mengembalikan keduanya
//mysqli-fetch_object() //mengembalikan memakai panah

// while ($sa = mysqli_fetch_assoc($result)) {
//     var_dump ($sa );
// } 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Siswa SA</h1>

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
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"];?>" width="50px"></td>
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