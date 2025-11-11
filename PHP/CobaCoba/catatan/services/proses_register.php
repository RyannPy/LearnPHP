<?php
session_start();

$db = new SQLite3("catatan.db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // cek apakah username sudah ada
  $sql = "SELECT * FROM users WHERE username = :username";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(":username", $username, SQLITE3_TEXT);
  $result = $stmt->execute()->fetchArray(SQLITE3_ASSOC);

  if ($result) {
    $_SESSION["error"] = "Username sudah digunakan!";
    header("Location: ../register.php");
    exit();
  } else {
    $sql =
      "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(":username", $username, SQLITE3_TEXT);
    $stmt->bindValue(":password", $password, SQLITE3_TEXT);
    $stmt->execute();

    $_SESSION["success"] = "Registrasi berhasil! Silakan login.";
    header("Location: ../login.php");
    exit();
  }
}
?>
