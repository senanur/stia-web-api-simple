<?php

// header('Content-type:application/json');
// error_reporting(0);
require_once('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST);

    // mengambil nilai dari tabel user
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($check) > 0) {
        echo "Email sudah terdaftar";
    } else {
        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($koneksi, $sql)) {
            echo "Proses registrasi berhasil!";
        } else {
            echo "Proses registrasi gagal!";
        }
    }
} else {
    echo "Invalid request.";
}
