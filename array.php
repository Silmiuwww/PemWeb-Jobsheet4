<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);

echo "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] >= 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman lebih dari 5 tahun: " . implode(", ", $karyawanPengalamanLimaTahun);

echo "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['alice', 85],
        ['bob', 92],
        ['charlie', 78],
    ],
    'Fisika' => [
        ['alice', 90],
        ['bob', 88],
        ['charlie', 75],
    ],
    'Kimia' => [
        ['alice', 92],
        ['bob', 80],
        ['charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>";

$nilaiMatematika = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($nilaiMatematika as $data) {
    $totalNilai += $data[1];
}

$rataRata = $totalNilai / 5;

echo "Daftar Nilai Siswa Ujian Matematika <br>";
echo "Rata-rata nilai kelas: $rataRata <br>";

echo "Siswa yang mendapatkan nilai di atas rata-rata:<br>";
foreach ($nilaiMatematika as $data) {
    if ($data[1] > $rataRata) {
        echo "Nama: " . $data[0] . ", Nilai: " . $data[1] . " <br>";
    }
}
?>