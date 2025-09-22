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

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

echo "Daftar skor ujian:<br>";
foreach ($skorUjian as $index => $skor) {
    echo "Siswa " . ($index + 1) . ": $skor<br>";
}

echo "<br>";
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

$jumlahSiswa = count($skorUjian);
$rataRata = $totalSkor / $jumlahSiswa;

echo "Total skor: $totalSkor<br>";
echo "Jumlah siswa: $jumlahSiswa<br>";
echo "Rata-rata skor: $rataRata";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$nilaiDipakai = 0;

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 75 && $nilai <= 90) {
        echo "Nilai: $nilai (Dipakai) <br>";
        $totalNilai += $nilai;
        $nilaiDipakai++;
    } else {
        echo "Nilai: $nilai (Diabaikan) <br>";
    }
}

echo "Total nilai yang dipakai: $totalNilai<br>";
echo "Jumlah nilai yang dipakai: $nilaiDipakai<br>";
echo "Rata-rata: " . ($totalNilai / $nilaiDipakai);

?>