<?php

    require 'php/functions.php';


    $pakaian = query("SELECT * FROM pakaian")

?>

<html>
    <head>
    
        <title>document</title>

        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
<body>
<h1>PAKAIAN</h1>
<div class="container">
    <table border="1" cellpadding="3" cellspacing="2">
        <tr>
            <th>NO</th>
            <th>Photo</th>
            <th>Type</th>
            <th>Merk</th>
            <th>Alamat</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($pakaian as $pk) :?>
        <tr>
        <td><?= $i ?></td>
        <td><img src="assets/img/<?=$pk["photo"]?>" ></td>
        <td><?=$pk["type"];?></td>
        <td><?=$pk["merk"];?></td>
        <td><?=$pk["alamat"];?></td>
        <td><?=$pk["harga"];?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    </div>
    
</body>
</html>