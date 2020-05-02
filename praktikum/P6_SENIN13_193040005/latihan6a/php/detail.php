<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'function.php';

    $id = $_GET['id'];

    $i = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<html>
    <head>
    
        <title>document</title>
       <link rel="stylesheet" href="../css/style.css">

    </head>

<body>
<div class="container">
        <div class="photo">
            <img src="../assets/img/<?= $i["photo"]; ?>" alt="">
         </div>
            <div class="keterangan">
                <p><?= $i["type"]; ?></p>
                <p><?= $i["merk"]; ?></p>
                <p><?= $i["alamat"]; ?></p>
                <p><?= $i["harga"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">Back</a> </button>
    </div>
</body>
</html>
