<?php

// require_once("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil nilai dari tabel siswa
    $nis = $_POST['nis'];
    $namasiswa = $_POST['namasiswa'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $tanggallahir = $_POST['tanggallahir'];
    $foto_base64 = $_POST['foto'];

    // dekode gambar foto siswa
    $imageData = base64_decode($foto_base64);

    // buat nama file gambar
    $namaFile = $nis."_siswa.jpg";

    // menentukan lokasi path file foto siswa
    $filePath = "upload/".$namaFile;

    // simpan foto di folder upload
    if (file_put_contents($filePath, $imageData)) {
        // koneksi ke database
        require_once('koneksi.php');

        $sql = "INSERT INTO siswa (nis, namasiswa, jk, alamat, tanggallahir, foto)
                VALUES ('$nis', '$namasiswa','$jk', '$alamat', '$tanggallahir', '$namaFile')";

        if (mysqli_query($koneksi, $sql)) {
            echo "Berhasil menambahkan data siswa!";
        } else {
            echo "Tidak berhasil menambahkan data siswa!";
        }

        mysqli_close($koneksi);
    } else {
        echo 'Gagal menyimpan foto';
    }
}