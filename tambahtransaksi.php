<?php

require_once('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idproduk = $_POST['idproduk'];
    $jumlahbeli = $_POST['jumlahbeli'];
    $total = $_POST['total'];
    $bayar = $_POST['bayar'];
    $kembalian = $_POST['kembalian'];
    $tanggaltransaksi = !empty($_POST['tanggaltransaksi']) ? $_POST['tanggaltransaksi'] : date("Y-m-d H:i:s");

    $sql = "INSERT INTO transaksi (idproduk, jumlahbeli, total, bayar, kembalian, tanggaltransaksi) VALUES ('$idproduk','$jumlahbeli', '$total', '$bayar', '$kembalian', '$tanggaltransaksi')";
    if (mysqli_query($koneksi, $sql)) {
        echo "Transaksi berhasil ditambahkan";
    } else {
        echo "Transaksi gagal ditambahkan";
    }
} else {
    echo "Invalid request";
}