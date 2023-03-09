<?php
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];

//query data siswa berdasarkan id
$saa = query("SELECT * FROM tb_siswasa WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

    //cek apakah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo"
        <script>
            alert('data berhasil di ubah');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal di ubah');
            document.location.href = 'index.php';
        </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Ubah data siswa</h1>

    <form action="" method="post">
    <input type="hidden" name="id" value=<?= $saa ["id"] ?>>
        <ul>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama"required
                value="<?= $saa ["nama"] ?>">
            </li>
            <li>
                <label for="nis">Nis:</label>
                <input type="text" name="nis" id="nis"
                value="<?= $saa ["nis"] ?>">
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email"
                value="<?= $saa ["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan"
                value="<?= $saa ["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <input type="text" name="gambar" id="gambar"
                value="<?= $saa ["gambar"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>


    </form>


</body>
</html>