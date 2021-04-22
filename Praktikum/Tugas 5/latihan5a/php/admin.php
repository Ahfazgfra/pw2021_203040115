<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$thrift_shop = query("SELECT * FROM thrift_shop");

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
    <table border="1">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
        </tr>

        <?php $i =1; ?>
        <?php foreach ($thrift_shop as $ts) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $ts['img']; ?>" alt=""></td>
                <td><?= $ts["nama"]; ?></td>
                <td><?= $ts["description"]; ?></td>
                <td><?= $ts["price"]; ?></td>
                <td><?= $ts["category"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>