<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
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
    <title>Tambah Data</title>
</head>

<body>
    <a href="index.php">Back</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk.." required">
            </li>
            <li>
                <label for="keterangan">Keterangan:</label>
                <input type="text" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan.." required>
            </li>
            <li>
                <label for="harga">Harga:</label>
                <input type="number" name="harga" id="harga" placeholder="Masukkan Harga.." required>
            </li>
            <li>
                <label for="jumlah">Jumlah:</label>
                <input type="number" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah.." required>

            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>