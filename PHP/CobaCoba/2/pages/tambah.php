<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
</head>
<body>
  <div>
    <h1> Tambah Catatan </h1>
    <form method="POST">
    <input type="text" placeholder="Masukkan judul" name="judulcatatan"></input>
    <input type="text" placeholder="Masukkan catatan" name="isicatatan"></input>
    <button type="submit" name="submit">Simpan</button>
  </div>
  </form>
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "services/db.php";
    $judulcatatan = $_POST["judulcatatan"];
    $isicatatan = $_POST["isicatatan"];

    $kirim = inputCatatan($judulcatatan, $isicatatan);
    if ($kirim) {
      echo "Berhasil disimpan";
    } else {
      echo "Gagal disimpan";
    }
  } ?>
  
</body>
</html>