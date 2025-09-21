<?php
$a = 10;
$b = 5;

$hasiltambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisabagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "Hasil Penjumlahan: {$hasiltambah} <br>";
echo "Hasil Pengurangan: {$hasilKurang} <br>";
echo "Hasil Perkalian: {$hasilKali} <br>";
echo "Hasil Pembagian: {$hasilBagi} <br>";
echo "Sisa Pembagian: {$sisabagi} <br>";
echo "Hasil Pemangkatan: {$pangkat} <br>";

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a == b? " . var_export($hasilSama, true) . "<br>";
echo "Apakah a != b? " . var_export($hasilTidakSama, true) . "<br>";
echo "Apakah a < b? " . var_export($hasilLebihKecil, true) . "<br>";
echo "Apakah a > b? " . var_export($hasilLebihBesar, true) . "<br>";
echo "Apakah a <= b? " . var_export($hasilLebihKecilSama, true) . "<br>";
echo "Apakah a >= b? " . var_export($hasilLebihBesarSama, true) . "<br>";

?>
