<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "tefasmk";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal: ". mysqli_connect_error();
    exit();
}

?>