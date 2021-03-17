<!-- Ahfaz Gafara -->
<?php
    $thrift_shop = [
    [
        "picture" => "p1.png",
        "nama" => "Kemeja Flanel",
        "description" => "Kemeja Flanel kualitas dan kondisi 100% new",
        "price" => "Rp 100.000",
        "category" => "Kemeja",
    ],
    [
        "picture" => "p2.png",
        "nama" => "Knitwear",
        "description" => "Knitwear kualitas dan kondisi 85%",
        "price" => "Rp 100.000",
        "category" => "Knitwear",
    ],
    [
        "picture" => "p3.png",
        "nama" => "Crewneck H&M",
        "description" => "Crewneck H&M kualitas dan kondisi 100% new",
        "price" => "Rp 200.000",
        "category" => "Crewneck",
    ],
    [
        "picture" => "p4.png",
        "nama" => "Knitwear Spesial Edition",
        "description" => "Knitwear Spesial Edition kualitan dan kondisi 90% new",
        "price" => "Rp 150.000",
        "category" => "Knitwear",
    ],
    [
        "picture" => "p5.png",
        "nama" => "Jaket Bomber",
        "description" => "Jaket Bomber kualitas dan kondisi 100% new",
        "price" => "Rp 150.000",
        "category" => "Jaket",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3e_203040115</title>
    <style>

        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: left;
        }
        th {
            background-color: red;
        }
        img {
            max-width: 50px;
        }
    </style>
</head>
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="30">
            <th>No</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <tr></tr>
            <?php $nomor = 1;?>
            <?php foreach ($thrift_shop as $ts) : ?>
               <td><?= $nomor; ?></td> 
               <td><img src="img/<?= $ts["picture"]; ?>"></td>
               <td><?= $ts["nama"] ?></td>
               <td><?= $ts["description"] ?></td>
               <td><?= $ts["price"] ?></td>
               <td class = "categori"><?= $ts["category"] ?></td>
               <tr></tr>
               <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>