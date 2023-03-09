<?php
//koneksi ke dbms
$conn = mysqli_connect("localhost","root","","phpdasar_xii");

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
    //ambil data dari tiap elemen dalam form
    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $email = $_POST["email"];
    $jurusan= $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    //query insert data
    $query = "INSERT INTO tb_siswasa VALUES('','$nama','$nis','$email','$jurusan','$gambar')";
    mysqli_query( $conn,$query);

    //cek apakah data berhasil di tambahkan atau tidak
    if( mysqli_affected_rows($conn) > 0 ) {
        echo"
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        
        ";
    }else{
        echo"
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama"
                required>
            </li>
            <li>
                <label for="nis">Nis:</label>
                <input type="text" name="nis" id="nis"
                required>
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email"
                required>
            </li>
            <li>
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan"
                required>
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <input type="text" name="gambar" id="gambar"
                required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>


    </form>


</body>
</html>