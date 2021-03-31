<!-- Ahfaz Gafara -->

?>

<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$keyboard = query("SELECT * FROM keyboard")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>keyboard</title>
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