<?php

/* 
* Menghitung Nilai BMI
TB: Tinggi badan
BB: Berat badan
TR: Tinggi rumus
BMI: Rumus BMI
*/ 

$nama = "Fadillah Kusnandar";
$tb = 185/100;
$bb = 80;
$tr = $tb * $tb;
$bmi = $bb / $tr;

echo "Halo, perkenalkan $nama. " ;
echo "Nilai BMI anda yaitu ".number_format($bmi);
echo ", Anda termasuk ";

if ($bmi < 18.5) {
  echo "Kurus";
} else if(($bmi >= 18.5) && ($bmi <= 24.9)) {
  echo "Sedang";
} else if(($bmi >= 25) && ($bmi <= 29.9)) {
  echo "Gemuk";
} else {
  echo "Berlebihan";
}

?>
