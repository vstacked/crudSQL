<?php
require 'functions.php';

$id = $_GET['id'];

$data = query("SELECT * FROM produk WHERE id=$id")[0];

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        echo " 
            <script>
                alert('berhasil');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('gagal');
                document.location.href = 'index.php';
            </script>
            ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data</title>
</head>

<body>
    <a href="index.php">Back</a>

    <h1>Ubah Produk</h1>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $data['id'] ?>">

        <ul>
            <li>
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk.." required value="<?= $data['nama_produk'] ?>">
            </li>
            <li>
                <label for="keterangan">Keterangan:</label>
                <input type="text" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan.." required value="<?= $data['keterangan'] ?>">
            </li>
            <li>
                <label for="harga">Harga:</label>
                <input type="number" name="harga" id="harga" placeholder="Masukkan Harga.." required value="<?= $data['harga'] ?>">
            </li>
            <li>
                <label for="jumlah">Jumlah:</label>
                <input type="number" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah.." required value="<?= $data['jumlah'] ?>">

            </li>
            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>
        </ul>
    </form>
</body>

</html>