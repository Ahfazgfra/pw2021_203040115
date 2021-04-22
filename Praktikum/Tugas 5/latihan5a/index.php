<!-- Ahfaz Gafara -->

<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$thrift_shop = query("SELECT * FROM thrift_shop")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>thrift_shop</title>
</head>
<body>
<div class="container">
    <?php foreach ($thrift_shop as $ts) : ?>
      <p class="Name">
        <a href="php/detail.php?id=<?= $ts['id'] ?>">
            <?= $ts["nama"] ?>
        </a>
      </p>
      <?php endforeach; ?>
  </div>
</body>
</html>