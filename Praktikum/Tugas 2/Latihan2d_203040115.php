<?php
    function hitungDeterminan($a, $b, $c, $d){
        $hitung = (($a * $d) - ($b * $c));
        echo "<table style='border-left: 1px solid black; border-right:1px solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td> $a </td>
                <td> $b </td>
            </tr>
            <tr>
                <td> $c </td>
                <td> $d </td>
            </tr>
        </table>";
        
        echo "Determinan dari matriks tersebut adalah $hitung";
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
    <?php hitungDeterminan(1, 2, 3, 4) ?>
</body>
</html>