<?php

require_once("koneksi.php");

$sql = "SELECT * FROM siswa";
$res = mysqli_query($koneksi, $sql);
$result = array();

while ($row = mysqli_fetch_array($res)) {
    $foto_path = "upload/".$row["foto"];
    $foto_base64 = file_exists($foto_path) ? base64_encode(file_get_contents($foto_path)) : "" ;
    $result[] = array(
        "nis" => $row["nis"],
        "namasiswa" => $row["namasiswa"],
        "jk" => $row["jk"],
        "alamat" => $row["alamat"],
        "tanggallahir" => $row["tanggallahir"],
        "foto" => $foto_base64
    );
}

// output menggunakan json
header('Content-type:application/json');
echo json_encode(array("result" => $result));