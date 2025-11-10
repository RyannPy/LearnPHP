<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YourBlog - Home</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>YourBlog</h1>
      <a href="tambah.php" class="btn">+ Tambah Catatan</a>
    </header>

    <!-- Contoh Card Catatan -->
    
    <?php
    require "services/db.php";
    $catatan = viewCatatan();

    foreach ($catatan as $item) {
      echo "<div class='card'>";
      echo "<h2>" . htmlspecialchars($item["judul_blog"]) . "</h2>";
      echo "<div class='meta'> By " .
        htmlspecialchars($item["author_blog"]) .
        " | " .
        htmlspecialchars($item["date_blog"]) .
        "</div>";
      echo "<p>" .
        htmlspecialchars(substr($item["content_blog"], 0, 50)) .
        "</p>";
      echo "<a href='blog.php' class='readmore'>Read more →</a>";
      echo "</div>";
    }
    ?>

  </div>
</body>
</html>