<?php
$a = 10;
$b = 5;

$hasiltambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisabagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: $a <br>";
echo "Nilai b: $b <br><br>";

echo "Hasil Penjumlahan: $hasiltambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Pembagian: $sisabagi <br>";
echo "Hasil Pemangkatan: $pangkat <br><br>";

$hasilSama = ($a == $b);
$hasilTidakSama = ($a != $b);
$hasilLebihKecil = ($a < $b);
$hasilLebihBesar = ($a > $b);
$hasilLebihKecilSama = ($a <= $b);
$hasilLebihBesarSama = ($a >= $b);

echo "Apakah a == b? $hasilSama <br>";
echo "Apakah a != b? $hasilTidakSama <br>";
echo "Apakah a < b? $hasilLebihKecil <br>";
echo "Apakah a > b? $hasilLebihBesar <br>";
echo "Apakah a <= b? $hasilLebihKecilSama <br>";
echo "Apakah a >= b? $hasilLebihBesarSama <br><br>";


$hasilAnd = ($a && $b);
$hasilOr = ($a || $b);
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b): $hasilAnd <br>";
echo "Hasil OR (a || b): $hasilOr <br>";
echo "Hasil NOT (!a): $hasilNotA <br>";
echo "Hasil NOT (!b): $hasilNotB <br>";

echo "<br>";

$a += $b;
echo "Setelah a += b, nilai a: $a <br>";
$a -= $b;
echo "Setelah a -= b, nilai a: $a <br>";
$a = $b;
echo "Setelah a= b, nilai a: $a <br>";
$a /= $b;
echo "Setelah a /= b, nilai a: $a <br>";
$a %= $b;
echo "Setelah a %= b, nilai a: $a <br><br>";

$hasilIdentik = ($a === $b);
$hasilTidakIdentik = ($a !== $b);

echo "Apakah a === b (identik)? $hasilIdentik <br>";
echo "Apakah a !== b (tidak identik)? $hasilTidakIdentik <br>";
?>