<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
</head>
<body>
  <div>
    <h1> Cari Catatan </h1>
  <form method="POST">
    <input type="text" placeholder="Masukkan judul" name="judulcatatan"></input>
    <button type="submit" name="submit">Cari</button>
  </form>
  </div>
  <?php
  require "services/db.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judulcatatan = $_POST["judulcatatan"];

    $cek = cariCatatan($judulcatatan);
    if ($cek) {
      echo $cek["isi"];
    } else {
      echo "Catatan tidak ada";
    }
  }
  ?>
</body>
</html>