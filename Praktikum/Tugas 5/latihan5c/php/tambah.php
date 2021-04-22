<?php 
require 'functions.php';

if(isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'admin.php';
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
</head>
<body>
    <form action="" method="post">
    <ul>
        <li>
            <label for="picture">Picture :</label><br>
            <input type="file" name="picture" id="picture" required><br><br>
        </li>
        <li>
            <label for="name">Nama :</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="description">Description :</label><br>
            <input type="text" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="price">Price :</label><br>
            <input type="price" name="price" id="price" required><br><br>
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
        <button type="submit" name="tambah">Tambahkan Data</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
        </ul>
    </form>
</body>