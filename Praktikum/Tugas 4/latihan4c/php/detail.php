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
<html>
<head>
	<meta charset="utf-8">
	<title>Detail php</title>
	<style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: center;
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
		<div class="Picture">
			<img src="../asset/img/<?= $thrift_shop["picture"]; ?>" alt="">
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