<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
} 

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "Jarak awal: $jarakSaatIni kilometer<br>";
echo "Target jarak: $jarakTarget kilometer<br>";
echo "Peningkatan jarak per hari: $peningkatanHarian kilometer<br><br>";

echo "Proses perhitungan:<br>";
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "Hari ke-$hari: Jarak mencapai $jarakSaatIni kilometer<br>";
}

echo "<br>";
echo "Hasil: Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer";

echo "<br><br>";

$jumlahLahan = 10;
$jumlahPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "Jumlah lahan: $jumlahLahan<br>";
echo "Jumlah tanaman per lahan: $jumlahPerlahan<br>";
echo "Buah per tanaman: $buahPerTanaman<br><br>";

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($jumlahPerlahan * $buahPerTanaman);
    echo "Lahan ke-$i: " . ($jumlahPerlahan * $buahPerTanaman) . " buah<br>";
}

echo "<br>";
echo "Total jumlah buah yang akan dipanen adalah: $jumlahBuah buah";
?>
