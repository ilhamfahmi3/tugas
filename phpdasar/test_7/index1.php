<?php
//variable scope / lingkup variabel

// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }
// tampilx();

//SUPERGLOBALS
//variable global milik PHP
//merupakan array associative
//Superglobal
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

//$_GET
// $_GET["nama"] = "ilham fahmi";
// $_GET["nis"] = "123456";


$siswasa = [
    [
    "nama" =>"Muhammad",
    "nis" =>"1,23456",
    "jurusan" =>"RPL1",
    "email" =>"ilham****@gmail.com"
    ],
    [
    "nama" =>"Ilham",
    "nis" =>"1,23456",
    "jurusan" =>"RPL2",
    "email" =>"ilham****@gmail.com"
    ],
    [
    "nama" =>"Fahmi",
    "nis" =>"1,23456",
    "jurusan" =>"RPL3",
    "email" =>"ilham****@gmail.com"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Siswasa</title>
</head>
<body>
    <h1>Daftar siswasa</h1>

    <ul>
        <?php foreach ( $siswasa as $sa) :?>
                <a href="index2.php?nama=<?=$sa["nama"];?>&nis=<?=$sa["nis"];?>&jurusan=<?=$sa["jurusan"];?>&email=<?=$sa["email"];?>"><li><?= $sa["nama"]; ?></li></a>
        <?php endforeach?>
    </ul>
</body>
</html>
