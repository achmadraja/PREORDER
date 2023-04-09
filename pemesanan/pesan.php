<?php
    // ambil id_barang yang dipesan
    $id_barang = $_GET["id"];

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
        <h2>Isi Formulir PreOrder</h2>
        <table>
            <form method="POST"
            action="http://localhost:8080/preorder/pemesanan/proses_pesan.php">
            <input name="id_barang" type="hidden" value="<?= $id_barang ?>">    
            <tr>
                    <td>Nama :</td>
                    <td><input name="nama" type="text"></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input name="email" type="text"></td>
                </tr>
                <tr>
                    <td>No HP :</td>
                    <td><input name="no_hp" type="text"></td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td><input name="alamat" type="text"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Submit</button></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>