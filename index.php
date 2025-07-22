<?php
$images = [];

if (is_dir('photos')) {
    $files = scandir('photos');
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $images[] = $file;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mini Insta</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>MINI INSTA</h1>
  <p>Ajoutez une photo</p>

  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit" name="upload">Envoyer</button>
  </form>

  <div class="gallery">
    <?php foreach ($images as $img): ?>
      <div class="photo">
        <img src="photos/<?= $img ?>" alt="<?= $img ?>">
        <div class="filename"><?= $img ?></div>
      </div>
    <?php endforeach; ?>
  </div>

</body>
</html>
