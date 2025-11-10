<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YourBlog - Tambah Catatan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Tambah Catatan</h1>
      <a href="home.php" class="btn">← Kembali</a>
    </header>

    <form action="proses_tambah.php" method="POST">
      <label for="judul">Judul</label>
      <input type="text" id="judul" name="judul" placeholder="Masukkan judul..." required>

      <label for="author">Author</label>
      <input type="text" id="author" name="author" placeholder="Nama penulis..." required>

      <label for="tanggal">Tanggal</label>
      <input type="date" id="tanggal" name="tanggal" required>

      <label for="isi">Isi Catatan</label>
      <textarea id="isi" name="isi" placeholder="Tulis isi blog kamu di sini..." required></textarea>

      <button type="submit">Simpan Catatan</button>
    </form>
  </div>
</body>
</html>