<?php
    // ambil konfigurasi db
    require_once "config/db.php";

    // buat query
    $query = "SELECT * FROM barang";
    $hasil = mysqli_query($koneksi, $query);
    //ekstrak
    $barang = $hasil->fetch_all(MYSQLI_ASSOC);

    // cek data
    // print_r($barang);
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
    <center>
        <h2>Silahkan PreOrder Barang Kami!</h2>
        <table border="1">
            <thead>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Tgl Penutupan</th>
                <th>Order</th>
            </thead>
            <tbody>
                <?php foreach ($barang as $satuan){ ?>
                    <tr>
                        <td><?php echo $satuan["id_barang"] ?></td>
                        <td><?php echo $satuan["nama_barang"] ?></td>
                        <td><?php echo $satuan["deskripsi_barang"] ?></td>
                        <td><?php echo $satuan["harga_barang"] ?></td>
                        <td><?php echo $satuan["penutupan_barang"] ?></td>
                        <td>
                            <a href="http://localhost:8080/preorder/pemesanan/pesan.php?id=<?= $satuan['id_barang']?>">
                            <button>pesan</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </center>
</body>
</html>