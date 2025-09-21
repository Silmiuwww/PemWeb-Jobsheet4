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

echo "Apakah a == b? ";
if ($hasilSama) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Apakah a != b? ";
if ($hasilTidakSama) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Apakah a < b? ";
if ($hasilLebihKecil) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Apakah a > b? ";
if ($hasilLebihBesar) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Apakah a <= b? ";
if ($hasilLebihKecilSama) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Apakah a >= b? ";
if ($hasilLebihBesarSama) {
    echo "true";
} else {
    echo "false";
}
echo "<br><br>";

$hasilAnd = ($a && $b);
$hasilOr = ($a || $b);
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b): ";
if ($hasilAnd) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Hasil OR (a || b): ";
if ($hasilOr) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Hasil NOT (!a): ";
if ($hasilNotA) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Hasil NOT (!b): ";
if ($hasilNotB) {
    echo "true";
} else {
    echo "false";
}
echo "<br><br>";

$a += $b;
echo "Hasil a += b: $a <br>";

$a -= $b;
echo "Hasil a -= b: $a <br>";

$a *= $b;
echo "Hasil a *= b: $a <br>";

$a /= $b;
echo "Hasil a /= b: $a <br>";

$a %= $b;
echo "Hasil a %= b: $a <br><br>";

$hasilIdentik = ($a === $b);
$hasilTidakIdentik = ($a !== $b);

echo "Apakah a === b (identik)? ";
if ($hasilIdentik) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";

echo "Apakah a !== b (tidak identik)? ";
if ($hasilTidakIdentik) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";
?>