<?php 
// menghubungkan dengan file php lainnya
require 'function.php';
// melakukan query
$result = query("SELECT * FROM pakaian")
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h3>ADMIN</h3>
        <table border="1" cellpadding="13" cellspacing="0">
            <tr>
                <th>Opsi</th>
                <th>Photo</th>
                <th>Type</th>
                <th>Merk</th>
                <th>Alamat</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($result as $i) : ?>
             <tr>
                <td>
                    <a href=""><button class="b1">Ubah</button></a>
                    <a href=""><button class="b2">Hapus</button></a>
                </td>
                <td><img width="100px" src="../assets/img/<?= $i['photo']; ?>"></td>
                <td><?= $i["type"]; ?></td>
                <td><?= $i["merk"]; ?></td>
                <td><?= $i["alamat"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td>
                    <button class="kembali">
                    <center><a href="../index.php">Kembali</a></center>
                    </button>
                </td>
            </tr>
        </table>	
    </body>
</html>