<?php
$db = new SQLite3("services/bukutamu.db");

function tambahUser($username, $password)
{
  global $db;
  $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(1, $username, SQLITE3_TEXT);
  $stmt->bindValue(2, $password, SQLITE3_INTEGER);
  return $stmt->execute();
}

function getUser($username)
{
  global $db;
  $sql = "SELECT * FROM users WHERE username = :username";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(":username", $username, SQLITE3_TEXT);
  return $stmt->execute()->fetchArray(SQLITE3_ASSOC);
}

function cekLogin($username, $password)
{
  global $db;
  $sql =
    "SELECT * FROM users WHERE username = :username AND password = :password";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(1, $username, SQLITE3_TEXT);
  $stmt->bindValue(2, $password, SQLITE3_INTEGER);
  return $stmt->execute();
}
?>
