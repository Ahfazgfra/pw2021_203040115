<?php 

	// Mengecek apakah ada id yang dikirimkan
	// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$thrift_shop = query("SELECT * FROM thrift_shop WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c_203040115</title>
    <style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: left;
        }
        th {
            background-color: red;
            color: whitesmoke;
        }
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>
	<div class="container">
		<div class="picture">
			<img src="../assets/img/<?= $thrift_shop["picture"]; ?>" alt="">
		</div>
		<div class="Description">
			<p><?= $thrift_shop["nama"]; ?></p>
			<p><?= $thrift_shop["description"]; ?></p>
			<p><?= $thrift_shop["price"]; ?></p>
			<p><?= $thrift_shop["category"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>

</body>
</html>