<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar_xii");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];  
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah ($data) {
    global $conn; 

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan= htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO tb_siswasa 
                VALUES('','$nama','$nis','$email','$jurusan','$gambar')
            ";
    mysqli_query( $conn,$query);

    return mysqli_affected_rows($conn);
}  


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_siswasa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>