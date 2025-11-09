<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form method="POST">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="password" placeholder="password">
      <button type="submit" name="kirim">Cek</button>
    </form>
    
  <?php
  require("services/db.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $cek = cekLogin($username, $password);
    if ($cek){
      echo "Login berhasil!";
    } else {
      echo "Login gagal!";
    }
  } ?>
</body>
</html>
