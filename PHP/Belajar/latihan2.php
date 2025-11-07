<?php
# IF ELSE

$nilai = 60;
if ($nilai >= 90) {
  echo "A, Lulus dengan sangat baik\n";
} elseif ($nilai >= 75) {
  echo "B, Lulus baik\n";
} elseif ($nilai >= 60) {
  echo "C, Lulus cukup\n";
} else {
  echo "D, Tidak Lulus\n";
}

# SWITCH CASE

$menu = 3;

switch ($menu) {
  case 1:
    echo "Nasi goreng\n";
    break;
  case 2:
    echo "Mie ayam\n";
    break;
  case 3:
    echo "Sate ayam\n";
    break;
  default:
    echo "Menu tidak tersedia.\n";
    break;
}

# SHORTHAND

$umur = 30;
echo $umur >= 17 ? "Boleh bikin ktp\n" : "Belum boleh bikin ktp\n";

?>
