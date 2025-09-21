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

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b): " . var_export($hasilAnd, true) . "<br>";
echo "Hasil OR (a || b): " . var_export($hasilOr, true) . "<br>";
echo "Hasil NOT (!a): " . var_export($hasilNotA, true) . "<br>";
echo "Hasil NOT (!b): " . var_export($hasilNotB, true) . "<br>";

echo "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$aTemp = $a; $aTemp += $b;
echo "Hasil \$a += \$b: " . var_export($aTemp, true) . "<br>";
$aTemp = $a; $aTemp -= $b;
echo "Hasil \$a -= \$b: " . var_export($aTemp, true) . "<br>";
$aTemp = $a; $aTemp *= $b;
echo "Hasil \$a *= \$b: " . var_export($aTemp, true) . "<br>";
$aTemp = $a; $aTemp /= $b;
echo "Hasil \$a /= \$b: " . var_export($aTemp, true) . "<br>";
$aTemp = $a; $aTemp %= $b;
echo "Hasil \$a %= \$b: " . var_export($aTemp, true) . "<br>";

echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a === b (identik)? " . var_export($hasilIdentik, true) . "<br>";
echo "Apakah a !== b (tidak identik)? " . var_export($hasilTidakIdentik, true) . "<br>";

?>
