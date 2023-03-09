<?php 
$siswasa = [
    ["Ilham Fahmi","20_5404","RPL","Email*************@gmail.com"],
    ["Ilham Fahmi","20_5404","RPL","Email*************@gmail.com"],
    ["Ilham Fahmi","20_5404","RPL","Email*************@gmail.com"]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<h1>Daftar Siswasa</h1>

<?php foreach( $siswasa as $sa) : ?>
<ol>
    <li>Nama__:<?= $sa[0]; ?></li>
    <li>NIS____:<?= $sa[1]; ?></li>
    <li>Jurusan_:<?= $sa[2]; ?></li>
    <li>Email__:<?= $sa[3]; ?></li>
</ol>
<?php endforeach?>




</body>
</html>