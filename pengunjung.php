<?php
include 'proses/koneksi.php';

$conn = new Koneksi();

$tampil = $conn->kueri("SELECT * FROM `tb_pengunjung`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
</body>
</html>