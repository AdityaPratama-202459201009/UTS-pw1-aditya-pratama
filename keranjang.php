<?php
session_start();

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keranjang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Keranjang Belanja</h1>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Porsi</th>
    <th>Subtotal</th>
    <th>Aksi</th>
</tr>

<?php

$no = 1;

foreach($_SESSION['keranjang'] as $index => $item){

$subtotal = $item['harga'] * $item['porsi'];

$total += $subtotal;

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $item['nama']; ?></td>

<td><?= $item['harga']; ?></td>

<td><?= $item['porsi']; ?></td>

<td><?= $subtotal; ?></td>

<td>
<a href="hapus.php?id=<?= $index; ?>">
Hapus
</a>
</td>

</tr>

<?php } ?>

</table>

<h2>Total: <?= $total; ?></h2>

<a href="bayar.php">
<button>Bayar</button>
</a>

</body>
</html>