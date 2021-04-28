<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$ts = query("SELECT * FROM thrift_shop WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert'Data Berhasil dubah!');
                document.location.herf = 'admin.php';
            </script>";
    
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                document.location.herf = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #778899;
            color: black;
            padding: 20px;
            font-family: sans-serif;
            src: url('asset/RockfordSans-light.otf');
        }
    </style>
</head>
<body>
<title>Form ubah Data</title>
<form action="" method="post">
    <ul>
        <li>
            <label for="picture">Picture :</label><br>
            <input type="file" name="picture" id="picture" required value="<?=$ts['picture']; ?>"><br><br>
        </li>
        <li>
            <label for="name">Nama :</label><br>
            <input type="text" name="name" id="name" required value="<?=$ts['name']; ?>"><br><br>
        </li>
        <li>
            <label for="description">Description :</label><br>
            <input type="text" name="description" id="description" required value="<?=$ts['description']; ?>"><br><br>
        </li>
        <li>
            <label for="price">Price :</label><br>
            <input type="price" name="price" id="price" required value="<?=$ts['price']; ?>"><br><br>
        </li>
        <li>
            <label for="category">Category :</label><br>
            <select name="category" id="category" required>
                <option value="">-------------Pilih Category------------</option>
                <option value="kemeja">Kemeja</option>
                <option value="knitwear">Knitwear</option>
                <option value="crewneck">Crewneck</option>
                <option value="jaket">Jaket</option>
                <option value="waistBag">Waist Bag</option>
                <option value="kaos">Kaos</option>
                <option value="sepatu">Sepatu</option>
            </select>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
        </ul>

</body>
</html>