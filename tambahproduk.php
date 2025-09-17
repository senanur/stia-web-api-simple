<?php

// require_once("koneksi.php");

error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // mengambil nilai dari tabel produk
    $idproduk = $_POST['idproduk'];
    $namaproduk = $_POST['namaproduk'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $barcodeBase64 = $_POST['barcode'];
    
    // decode qr-code
    $imageData = base64_decode($barcodeBase64);

    // buat nama untuk file gambar qr-code
    $namaFile = $idproduk."_produk.jpg";

    // tentukan path file
    $filePath = "upload/".$namaFile;

    // simpan gambar ke folder upload
    if (file_put_contents($filePath, $imageData)) {
        // koneksi ke database
        require_once('koneksi.php');

        $sql = "INSERT INTO produk (idproduk, namaproduk, jumlah, harga, barcode)
                VALUES ('$idproduk', '$namaproduk','$jumlah', '$harga', '$namaFile')";

        header('Content-type:application/json');
        if (mysqli_query($koneksi, $sql)) {
            echo "Berhasil menambahkan data produk!";
        } else {
            echo "Tidak berhasil menambahkan data produk!";
        }

        mysqli_close($koneksi);
    } else {
        echo 'Gagal menyimpan qrcode';
    }
}
