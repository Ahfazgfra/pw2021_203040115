<?php
    function tumpukanBola($tumpukan){
        for ($x = 0; $x < $tumpukan; $x++) {
            for ($j = 0; $j <= $x; $j++) {
              echo "<div class='bola'>$tumpukan</div>";
            }   
          echo "<br>";
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
        .bola {
            background-color: salmon;
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            border: black solid 3px;
            line-height: 50px;
            text-align: center;
            margin: 0px 5px 10px 0px;
        }
        .kotak {
            border: black 2px;
        }
    </style>
</head>
<body>
    <?php tumpukanBola(5) ?>
</body>
</html>