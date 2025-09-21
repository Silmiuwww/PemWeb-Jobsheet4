<?php
$total_kursi = 45;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "<h3>Perhitungan Kursi Restoran</h3>";
echo "Total kursi di restoran: " . $total_kursi . " kursi<br>";
echo "Kursi yang sudah terisi: " . $kursi_terisi . " kursi<br>";
echo "Kursi yang masih kosong: " . $kursi_kosong . " kursi<br>";
echo "Persentase kursi kosong: " . $persentase_kosong . "%<br>";

echo "<br>Jadi, persentase kursi yang masih kosong di restoran adalah: " . $persentase_kosong . "%";
?>