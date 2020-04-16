<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<html>
    <head>
    
        <title>document</title>



        <link rel="stylesheet" href="style.css">

    </head>

<body>
<div class="container">
        <div class="photo">
            <img src="../assets/img/<?= $pakaian["photo"]; ?>" alt="">
         </div>
            <div class="keterangan">
                <p><?= $pakaian["type"]; ?></p>
                <p><?= $pakaian["merk"]; ?></p>
                <p><?= $pakaian["alamat"]; ?></p>
                <p><?= $pakaian["harga"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">kembali</a> </button>
    </div>
</body>
</html>
