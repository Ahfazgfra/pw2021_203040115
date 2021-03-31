<!-- Ahfaz Gafara -->
<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040115");
$result = mysqli_query($conn, "SELECT * FROM thrift_shop");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4a_203040115</title>
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
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td> 
                    <td><img src="assets/img/<?= $row["picture"]; ?>"></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["description"] ?></td>
                    <td><?= $row["price"] ?></td>
                    <td><?= $row["category"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>