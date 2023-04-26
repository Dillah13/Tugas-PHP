<?php

/* 
* Menghitung Nilai Kategori
*/ 

$nilai = 88;
switch ($nilai)
{
	case ($nilai <= 100 && $nilai >= 90) :
		echo 'Nilai anda adalah A';
		break;
	case ($nilai < 90 && $nilai >= 80) :
		echo 'Nilai anda adalah B';
		break;
	case ($nilai < 80 && $nilai >= 70) :
		echo 'Nilai anda adalah C';
		break;
	case ($nilai < 70 && $nilai >=  0) :
		echo 'Nilai anda adalah D';
		break;

	default : 
		echo 'Anda tidak mendapatkan nilai';
}
?>