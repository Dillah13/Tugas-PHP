<?php

/*Hitung Luas Persegi Panjang
ppj: panjang persegi panjang
lpj: panjang persegi panjang
lpp: luas persegi panjang
*/ 

$ppj = 12;
$lpj = 5;
$lpp = $ppj * $lpj;

echo "Menghitung Luas Persegi Panjang, Rumusnya yaitu L = p * l.<br/>";
echo "Panjang = $ppj cm <br/>";
echo "Lebar = $lpj cm <br/>";
echo "L : $ppj x $lpj = $lpp <br/>";
echo "Jadi luas dari persegi panjang adalah $lpp cm<sup>2</sup>";
echo "<hr/>";

/* Menghitung Luas Segitiga
as: alas segitiga
ts: tinggi segitiga
ls: luas segitiga
*/

$as = 9;
$ts = 4;
$ls = 0.5 * $as * $ts;

echo "Menghitung Luas Segitiga, Rumusnya yaitu L = ½ * a * t.<br/>";
echo "Alas = $as cm<br/>";
echo "Tinggi = $ts cm<br/>";
echo "L : ½ x $as x $ts = $ls <br/>";
echo "Jadi luas dari segitiga itu adalah $ls cm<sup>2</sup>";
echo "<hr/>";

/* Menghitung Luas Trapesium
tt: tinggi trapesium
si: sisi sejajar 1
si: sisi sejajar 2
lt: luas trapesium
*/

$tt = 7;
$s1 = 12;
$s2 = 8;
$lt = 0.5 * ($s1 + $s2) * $tt;

echo "Menghitung Luas Trapesium, Rumusnya yaitu L = ½ * (a + b) * t.<br/>";
echo "Sisi a = $s1 cm<br/>";
echo "Sisi b = $s2 cm<br/>";
echo "Tinggi = $tt cm<br/>";
echo "L : ½ x ($s1 + $s2) x $tt = $lt <br/>";
echo "Jadi luas dari trapesium itu adalah $lt cm<sup>2</sup>";
echo "<hr/>";

/* Menghitung Luas Belah Ketupat
d1: diagonal 1
si: diagonal 2
lbk: luas belah ketupat
*/

$d1 = 18;
$d2 = 10;
$lbk = 0.5 * $d1 * $d2;

echo "Menghitung Luas Belah Ketupat, Rumusnya yaitu L = ½ * d1 * d2.<br/>";
echo "Diagonal 1 = $d1 cm<br/>";
echo "Diagonal 2 = $d2 cm<br/>";
echo "L : ½ x $d1 x $d2 = $lbk <br/>";
echo "Jadi luas dari belah ketupat itu adalah $lbk cm<sup>2</sup>";
echo "<hr/>";

/* Menghitung Luas Lingkaran
d1: diagonal 1
si: diagonal 2
lbk: luas belah ketupat
*/

$jr = 14;
$ll = pi() * ($jr * $jr);

echo "Menghitung Luas Lingkaran, Rumusnya yaitu L = π * r<sup>2</sup>.<br/>";
echo "Jari Jari = $jr cm<br/>";
echo "L : 3.14 x ($jr x $jr) = $ll <br/>";
echo "Jadi luas dari segitiga itu adalah $ll cm<sup>2</sup>";
echo "<hr/>";

?>