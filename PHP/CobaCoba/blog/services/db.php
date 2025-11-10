<?php
$db = new SQLite3("services/blog.db");

function viewCatatan()
{
  global $db;
  $sql = "SELECT * FROM blog_table";
  $hasil = $db->query($sql);
  $data = [];
  while ($row = $hasil->fetchArray(SQLITE3_ASSOC)) {
    $data[] = $row;
  }
  return $data;
}

function viewCatatanSingle(){
  global $db;
  $sql = "SELECT * FROM blog_table WHERE ";
  $hasil = $db->query($sql);
  $data = [];
  while ($row = $hasil->fetchArray(SQLITE3_ASSOC)) {
    $data[] = $row;
  }
  return $data;
}
?>
