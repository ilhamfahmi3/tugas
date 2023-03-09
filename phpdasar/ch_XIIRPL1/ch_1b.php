<?php 

    $nilai=84;

    if ($nilai > 89) {
      $ket = "Sangat Baik";
    } else if ($nilai > 79) {
      $ket = "Baik";
    } else if ($nilai > 69) {
      $ket = "Cukup";
    } else {
      $ket = "Kurang";
    }

echo ("Nilai anda ".$nilai.", Keterangan ".$ket);

echo"<br><hr>";

$nilai=50;
if ($nilai>89) {
    $ket = "Sangat Baik(A+)";
}elseif ($nilai>79) {
    $ket = "Baik(A)";
}elseif ($nilai>69) {
    $ket = "cukup(B)";
}elseif ($nilai>49) {
    $ket = "kurang(C)";
}else {
    $ket = "Sangat kurang(D)";
}
echo ("Nilai anda ".$nilai.", Keterangan ".$ket);

?> 