<?php

header('Content-type:application/json');
error_reporting(0);
require_once('koneksi.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

// query cek user
$sql = "SELECT * FROM user where email='$email' AND password='$password' LIMIT 1";
// var_dump($_POST);
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    

    echo json_encode([
        "status" => "success",
        "message" => "login berhasil",
        "data" => [
            "iduser" => $user['iduser'],
            "username" => $user['username'],
            "password" => $user['password'],
        ]
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "email atau password salah"
    ]);
}