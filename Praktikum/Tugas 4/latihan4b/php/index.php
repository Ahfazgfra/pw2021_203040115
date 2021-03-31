<!-- Ahfaz Gafara -->

<?php 
//Menghubungkan ke server Database
require 'php/functions.php'; 
//Memilih Database

//Melakukan query dari database
$thrift_shop = query ("SELECT * FROM thrift_shop")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4b_203040115</title>
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
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="30">
            <tr>
                <th>No</th>
                <th>Picture</th>
                <th>Nama</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($thrift_shop as $ts) : ?> 
                    <tr>
                        <td><?=$i ?></td>
                        <td><img src="asset/img/<?= $ts["picture"]; ?>"></td>
                        <td><?= $ts["nama"] ?></td>
                        <td><?= $ts["description"] ?></td>
                        <td><?= $ts["price"] ?></td>
                        <td><?= $ts["category"]; ?></td>
                    </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>