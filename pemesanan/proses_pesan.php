<?php
require_once "../config/db.php";
// mengambil kiriman formulir dari halaman sebelumnya

$id_barang = $_POST["id_barang"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$no_hp = $_POST["no_hp"];
$alamat = $_POST["alamat"];

// simpan ke database
$query = "INSERT INTO peserta VALUES(null, '$nama', '$email', '$no_hp ', '$alamat', $id_barang)";

// eksekusi query
$hasil = mysqli_query($koneksi, $query);

// konfirmasi
if($hasil){
    // berhasil
    echo "<h2>Selamat, anda terdaftar</h2>";
    echo "
        <script>
            setTimeout(()=>{
                window.location.href = 'http://localhost:8080/preorder/index.php'
            }, 2000)
        </script>
    ";
    }else {
        // gagal
    echo "<h2>Maaf, anda gagal terdaftar peserta</h2>";
    echo "
        <script>
            setTimeout(()=>{
                window.location.href = 'http://localhost:8080/preorder/index.php'
            }, 2000)
        </script>
    ";
    }
?>