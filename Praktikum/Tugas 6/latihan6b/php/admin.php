<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $thrift_shop = query("SELECT * FROM thrift_shop WHERE
                picture LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                description LIKE'%$keyword%' OR
                price LIKE '%$keyword%' OR
                category LIKE '%$keyword%' ");
} else {
    $thrift_shop = query("SELECT * FROM thrift_shop");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "css/style.css">
    <style>

        body {
            background-color: #778899;
        }
        .table {
            width: 100%;
            padding: 10px;
            font-family: sans-serif;
            src: url('asset/font/Rockford Sans-Light.otf');
            text-align: center;
            background-color: red;
            color: red;
            
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
<div class="add">
        <a href="tambah.php"><button>Tambah data</button></a>
        </div>
        <form action="" method="get">
            <input type="text" name="keyword">
            <button type="submit" name="cari">Cari</button>
        </form>
    <table border="1" cellspacing="0" cellpadding="30">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        <?php if (empty($thrift_shop)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
        <?php $i =1; ?>
        
        
        <?php foreach ($thrift_shop as $ts) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $ts["id"]; ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $ts["id"]; ?>" onclick="return confirm('Yakin mau di hapus')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $ts["picture"]; ?>" alt=""></td>
                <td><?= $ts["nama"]; ?></td>
                <td><?= $ts["description"]; ?></td>
                <td><?= $ts["price"]; ?></td>
                <td><?= $ts["category"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
    <div class="logout">
            <a href="logout.php"><button style="background-color: red; color: white">Logout</button></a>
    </div>
</body>
</html>