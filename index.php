<?php
    //ambil konfigurasi db
    require_once "config/db.php";

    //buat query
    $query = "SELECT * FROM barang";
    $hasil = mysqli_query($koneksi, $query);
    //ekstrak
    $barang = $hasil->fetch_all(MYSQLI_ASSOC);

    //cek data
    print_r($barang);
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
    <h2>Silahkan PreOrder Barang Kami!</h2>
</body>
</html>