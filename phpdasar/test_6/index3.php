<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Array Assosiative</h1>
<?php

$i = 1;

$siswa = [
    [
    "nama"=>"Joni Susanto",
    "kelas"=>"XII TKR 2",
    "alamat"=>"Pemalang"
    ],
    [
    "nama"=>"Intan Ayu",
    "kelas"=>"XII TB 1",
    "alamat"=>"Brebes"
    ],
    [
    "nama"=>"Salma Karima",
    "kelas"=>"XI RPL 3",
    "alamat"=>"Batang"
    ]
];

?>

<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
    </tr>
    <?php foreach($siswa as $s) : ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $s["nama"] ?></td>
        <td><?= $s["kelas"] ?></td>
        <td><?= $s["alamat"] ?></td>
    </tr>
    <?php endforeach ?>
    
</table>
</body>
</html>