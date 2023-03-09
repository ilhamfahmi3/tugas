<?php
// menit 30.00
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

    //upload gambar
    $gambar = upload();
    if( !$gambar  ) {
        return false; 
    }

    $query = "INSERT INTO tb_siswasa 
                VALUES
                ('','$nama','$nis','$email','$jurusan','$gambar')
            ";
    mysqli_query( $conn,$query);

    return mysqli_affected_rows($conn);
}  


function upload() {

    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if( $error == 4 ) {
        echo"<script>
                alert(' pilih gambar terlebih dahulu!!! ');
            </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensigambarvalid = ['jpg','jpeg','png'];
    $ekstensigambar = explode('.',$namafile); 
    $ekstensigambar = strtolower(end($ekstensigambar));
    if( !in_array($ekstensigambar,$ekstensigambarvalid) ) {
        echo"<script>
                alert('yang ada upload bukan gambar');
            </script>";
        return false; 
    }

    //cek jika ukurannya terlalu besar
    if( $ukuranfile > 1000000) {
        echo"<script> 
                alert(' ukuran gambar terlalu besar ');
            </script>";
        return false;
    }

    //lolos pengecekan, gambar siap diupload
    //generate nama gambar baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .=$ekstensigambar;
 
    move_uploaded_file($tmpname, 'img/'.$namafilebaru);

    return $namafilebaru;
}



function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_siswasa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn; 

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar'] ['error'] === 4 ) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE tb_siswasa SET
                nama ='$nama', 
                nis ='$nis', 
                email='$email', 
                jurusan ='$jurusan', 
                gambar ='$gambar'
            WHERE id = $id
            ";
            mysqli_query( $conn,$query);
            return mysqli_affected_rows($conn);
}  



function cari($keyword){
    $query = "SELECT * FROM tb_siswasa
                WHERE 
              nama LIKE '%$keyword%' OR
              nis LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%'
              ";
            return query($query);
}
?>