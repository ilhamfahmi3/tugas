<?php
//cek apakah tidak ada data di $_GET
if( 
    !isset($_GET["nama"]) ||
    !isset($_GET["nis"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"])

){
// redirect
header("location: index1.php");
exit;
}
?>

<html>
    <head>
        <title>Detail siswasa</title>
    </head>
    <body>
        
    <ul>
        <li> <?= $_GET["nama"]; ?> </li>
        <li> <?= $_GET["nis"]; ?> </li>
        <li> <?= $_GET["jurusan"]; ?> </li>
        <li> <?= $_GET["email"]; ?> </li>
    </ul>
    </body>
</html>