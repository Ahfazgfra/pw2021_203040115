<?php
//fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040115");

    return $conn;
}

//function untuk melakukan query dan memasukan ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    $conn = koneksi();

    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "INSERT INTO keyboard
                    VALUES
                    ('','$picture', '$name', '$description', '$price', '$category')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM thrift_shop WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>