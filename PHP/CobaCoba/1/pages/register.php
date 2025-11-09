<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>REGISTER</h1>
    <form method="POST">
      <input type="text" name="username" placeholder="username">
      <input type="password "name="password" placeholder="password">
      <button type="submit" name="kirim">Daftar</button>
    </form>
      <?php
      require "services/db.php";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"] ?? "";
        $password = $_POST["password"] ?? "";
        $cek = getUser($username);
        if ($cek) {
          echo "Username sudah dipakai!";
        } else {
          $kirim = tambahUser($username, $password);
          if ($kirim) {
            echo "Berhasil register!";
          } else {
            echo "Gagal register!";
          }
        }
      }
      ?>
</body>
</html>
