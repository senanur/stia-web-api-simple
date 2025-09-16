<?php

require_once("koneksi.php");

if (isset($_POST['nis'])) {
    $nis = $_POST['nis'];

    $sql = "DELETE FROM siswa WHERE nis='$nis'";
    $query = mysqli_query($koneksi, $sql);
    
    if ($query) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Data tidak berhasil dihapus!";
    }
} else {
    echo "Parameter NIS tidak ditemukan!";
}