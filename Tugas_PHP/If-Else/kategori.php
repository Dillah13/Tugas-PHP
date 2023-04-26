<?php

/* 
* Menghitung Nilai BMI
tb: tinggi badan
bb: berat badan
tr: tinggi rumus
bmi: rumus bmi
*/ 

$nama = "Teguh Aditia";
$tb = 170/100;
$bb = 60;
$tr = $tb * $tb;
$bmi = $bb / $tr;

echo "Halo, $nama. " ;
echo "Nilai BMI anda adalah ".number_format($bmi);
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
