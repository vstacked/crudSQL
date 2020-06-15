<?php
require 'functions.php';
$data = query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy</title>
</head>

<body>
    <h1>Daftar Produk</h1>

    <a href="tambah.php">Tambah Produk</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id'] ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('yakin?');">Hapus</a> <br>
                </td>
                <td><?= $row['nama_produk'] ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['jumlah'] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>