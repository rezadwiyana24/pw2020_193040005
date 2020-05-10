<?php

    // mengecek apakah id yang dikirim
    // jika tidak maka akan dikembalaikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    //mengambil id dr url
    $id = $_GET['id'];

    //melakukan query dengan parameter id yang diambil dari url
    $pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PAKAIAN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="photo">
            <img src="../assets/img/<?= $pakaian["photo"]; ?>">
        </div>
        <div class="keterangan">
            <p><?= $pakaian["merk"]; ?></p>
            <p><?= $pakaian["type"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Back</a></button>
    </div>
</body>
</html>