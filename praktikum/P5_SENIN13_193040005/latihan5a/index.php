<?php

    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");


    mysqli_select_db($conn, "tubes_193040005") or die ("Database salah!");


    $pakaian = mysqli_query($conn, "SELECT * FROM pakaian");
?>

<html>
    <head>
    
        <title>document</title>

        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
<body>
<div class="container">
<h1>PAKAIAN</h1>
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
        <?php while($pk = mysqli_fetch_assoc($pakaian)) :?>
        <tr>
        <td><?= $i ?></td> 
        <td><img src="assets/img/<?=$pk["photo"]?>" ></td>
        <td><?=$pk["type"];?></td>
        <td><?=$pk["merk"];?></td>
        <td><?=$pk["alamat"];?></td>
        <td><?=$pk["harga"];?></td>
        
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
    </div>
    
</body>
</html>