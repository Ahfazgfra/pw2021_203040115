<?php
$jawabanIsset = "Isset adalah = Untuk memeriksa apakah suatu variabel sudah diatur atau belum, dan mengembalikan false jika variabel tersebut pengujiannya berisini nilai NULL.<br><br>";
$jawabanEmpty = "Empty adalah = Empty pada PHP berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data.";

function soal($style){
    echo $GLOBALS['jawabanIsset'];
    echo $GLOBALS['jawabanEmpty'];
}

echo soal(
    "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight:bold;"
);