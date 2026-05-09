<?php
session_start();
include 'koneksi.php';

$data = $db->query("SELECT * FROM bahan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jamuku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Jamuku</h1>

<form action="tambah.php" method="POST">

<table border="1" cellpadding="10">

<tr>
    <th>Pilih</th>
    <th>Nama</th>
    <th>Jenis</th>
    <th>Harga</th>
</tr>

<?php while($row = $data->fetchArray()) { ?>

<tr>
    <td>
        <input type="checkbox"
        name="bahan[]"
        value="<?= $row['id']; ?>">
    </td>

    <td><?= $row['nama']; ?></td>
    <td><?= $row['jenis']; ?></td>
    <td><?= $row['harga']; ?></td>
</tr>

<?php } ?>

</table>

<br>

Jumlah Porsi:
<input type="number" name="porsi" value="1">

<br><br>

<button type="submit">
Tambah ke Keranjang
</button>

</form>

<br>

<a href="keranjang.php">
Lihat Keranjang
</a>

</body>
</html>