
<?php
// 1
$nama = ["Ryan", "Sora", "Luna", "Andi", "Budi"];

for ($i = 0; $i < count($nama); $i++) {
  $name = $nama[$i];
  $nomor = $i + 1;
  echo "Siswa ke $nomor - $name" . PHP_EOL;
}

// 2
$menu = [
  "Nasi Goreng" => 20000,
  "Mie Ayam" => 15000,
  "Sate Ayam" => 25000,
];
foreach ($menu as $nama => $harga) {
  echo "$nama = $harga" . PHP_EOL;
}

// 3
$daftarSiswa = [
  ["nama" => "Ryan", "nilai" => 90],
  ["nama" => "Sora", "nilai" => 75],
  ["nama" => "Luna", "nilai" => 60],
];

foreach ($daftarSiswa as $value) {
  echo $value["nama"] . ": " . $value["nilai"] . PHP_EOL;
}
foreach ($daftarSiswa as $value) {
  $status = $value["nilai"] >= 70 ? "Lulus" : "Tidak Lulus";
  echo $value["nama"] . ": " . $value["nilai"] . " ($status)" . PHP_EOL;
}


?>
