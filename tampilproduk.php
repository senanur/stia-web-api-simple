<?php

header('Content-type:application/json');

require_once("koneksi.php");

if (isset($_GET['idproduk'])) {
    $idproduk = ( $_GET['idproduk'] );
}

$result = array();

$query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY idproduk DESC");

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

echo json_encode(array('result' => $result));