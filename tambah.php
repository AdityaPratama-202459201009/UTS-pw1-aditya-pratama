<?php

session_start();
include 'koneksi.php';

$bahan = $_POST['bahan'];
$porsi = $_POST['porsi'];

$_SESSION['keranjang'] = [];

foreach($bahan as $id){

    $result = $db->querySingle(
        "SELECT * FROM bahan WHERE id = $id",
        true
    );

    $_SESSION['keranjang'][] = [
        'id' => $result['id'],
        'nama' => $result['nama'],
        'harga' => $result['harga'],
        'porsi' => $porsi
    ];
}

header("Location: keranjang.php");

?>