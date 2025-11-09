<?php

$db = new SQLite3("services/catatan.db");

function inputCatatan($judulcatatan, $isicatatan)
{
  global $db;
  $sql =
    "INSERT INTO tabelcatatan (judul, isi) VALUES (:judulcatatan, :isicatatan)";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(1, $judulcatatan, SQLITE3_TEXT);
  $stmt->bindValue(2, $isicatatan, SQLITE3_TEXT);
  return $stmt->execute();
}

function cariCatatan($judulcatatan)
{
  global $db;
  $sql = "SELECT * FROM tabelcatatan WHERE judul = :judulcatatan";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(":judulcatatan", $judulcatatan, SQLITE3_TEXT);
  $hasil = $stmt->execute()->fetchArray(SQLITE3_ASSOC);
  return $hasil;
}
?>
