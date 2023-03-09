<?php
$siswasa = [
            [
            "nama" =>"Ilham fahmi1",
            "nis" =>"123456",
            "jurusan" =>"RPL1",
            "email" =>"ilham****@gmail.com"
            ],
            [
            "nama" =>"Ilham fahmi2",
            "nis" =>"123456",
            "jurusan" =>"RPL2",
            "email" =>"ilham****@gmail.com"
            ],
            [
            "nama" =>"Ilham fahmi3",
            "nis" =>"123456",
            "jurusan" =>"RPL3",
            "email" =>"ilham****@gmail.com"
            ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Siswasa</title>
</head>
<body>
    <h1>Daftar siswasa</h1>

    <?php foreach ( $siswasa as $sa) :?>
        <ul>
            <li>Nama : <?= $sa["nama"]; ?></li>
            <li>Nis : <?= $sa["nis"]; ?></li>
            <li>Jurusan : <?= $sa["jurusan"]; ?></li>
            <li>Email : <?= $sa["email"]; ?></li>
        </ul>
    <?php endforeach?>
    
</body>
</html>