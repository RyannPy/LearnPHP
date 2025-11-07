<?php
function halo()
{
  echo "Selamat belajar PHP, Ryan!" . PHP_EOL;
}

halo();
halo();

function sapaan($nama)
{
  echo "Halo $nama! Semangat belajar!" . PHP_EOL;
}

sapaan("Ryan");
sapaan("Sora");

function tambah($a, $b)
{
  return $a + $b;
}
$hasil = tambah(7, 8);
echo "Hasil = $hasil" . PHP_EOL;

?>
