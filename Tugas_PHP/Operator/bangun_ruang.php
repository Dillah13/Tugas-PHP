<?php

/* Menghitung Volume Kubus
s: panjang sisi kubus
vr: volume balok
*/ 

$s = 5;
$vr = $s * $s * $s;

echo "Menghitung Volume Kubus, Rumusnya yaitu V = s³ atau V = s * s * s.<br/>";
echo "Panjang sisi kubus = $s cm <br/>";
echo "V : $s x $s x $s = $vr <br/>";
echo "Jadi Volume Kubus tersebut adalah $vr cm<sup>3</sup>";
echo "<hr/>";

/* Menghitung Volume Balok
pb: panjang balok
lb: lebar balok
tb: tinggi balok
vb: volume balok
*/ 

$pb = 8;
$lb = 6;
$tb = 5;
$vb = $pb * $lb * $tb;

echo "Menghitung Volume Balok, Rumusnya yaitu V = p * l * t.<br/>";
echo "Panjang = $pb cm <br/>";
echo "Lebar = $lb cm <br/>";
echo "Tinggi = $tb cm <br/>";
echo "V : $pb x $lb x $tb = $vb <br/>";
echo "Jadi Volume Balok tersebut adalah $vb cm<sup>3</sup>";
echo "<hr/>";

/* Menghitung Volume tabung
rt: jari jari lingkaran
tt: tinggi tabung
vp: volume tabung
*/ 

$rt = 10;
$tt = 30;
$vt = pi () * ($rt * $rt) * $tt;

echo "Menghitung Volume tabung, Rumusnya yaitu V = π * r² * t.<br/>";
echo "Jari - Jari Lingkaran = $rt cm <br/>";
echo "Tinggi= $tt cm <br/>";
echo "V : 3.14 x ($rt x $rt) x $tt = $vt <br/>";
echo "Jadi Volume tabung tersebut adalah $vt cm<sup>3</sup>";
echo "<hr/>";

?>