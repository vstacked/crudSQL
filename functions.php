<?php
//koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "arkademy";

$conn = mysqli_connect($host, $username, $password, $database);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = htmlspecialchars($data['harga']);
    $jumlah = htmlspecialchars($data['jumlah']);

    $query = "INSERT INTO produk VALUES
                    (
                        '',
                        '$nama_produk',
                        '$keterangan',
                        '$harga',
                        '$jumlah'
                    )";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $query = "DELETE FROM produk WHERE id=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data['id'];
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = htmlspecialchars($data['harga']);
    $jumlah = htmlspecialchars($data['jumlah']);

    $query = "UPDATE produk SET                                        
                nama_produk = '$nama_produk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
            WHERE id = $id";

    return mysqli_query($conn, $query);

    // return mysqli_affected_rows($conn);
}
