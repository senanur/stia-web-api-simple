<?php

require_once("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nis = $_POST['nis'];
    $namasiswa = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $tanggallahir = $_POST['tgllahir'];
    $foto_base64 = $_POST['foto'];

    $sql = "UPDATE siswa set 
                namasiswa = '$namasiswa',
                jk = '$jk',
                alamat = '$alamat',
                tanggallahir = '$tanggallahir'
            WHERE nis = '$nis'";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data siswa berhasil diubah!";
    } else {
        echo "Data siswa tidak berhasil diubah!".mysqli_error($koneksi);
    }
}