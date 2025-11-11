<?php
session_start();

$db = new SQLite3("catatan.db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE username = :username";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(":username", $username, SQLITE3_TEXT);
  $result = $stmt->execute()->fetchArray(SQLITE3_ASSOC);

  if ($result && $result["password"] == $password) {
    $_SESSION["username"] = $username;
    header("Location: ../index.php");
    exit();
  } else {
    $_SESSION["error"] = "Username atau password salah!";
    header("Location: ../login.php");
    exit();
  }
}
?>

