<?php
    // menghubungkan dengan file php lainnya
    require 'function.php';
    // melakukan query
    $result = query("SELECT * FROM pakaian")
    ?>

<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1 class="head">ADMIN</h1>
    <div class="kotak">
        <div class="">
            <a href="tambah.php"><button class="add">Tambah Data</button></a>
        </div>
        <table border="1" cellpadding="13" cellspacing="2">
            <tr>
                <th>Opsi</th>
                <th>Type</th>
                <th>Merk</th>
                <th>Alamat</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($result as $i) : ?>
                <tr>
                    <td>
                        <div class="">
                            <a href="hapus.php?id=<?= $i["id"] ?>" onclick="return confirm('Hapus Data??')"><button class="delete">Hapus</button></a>
                            <a href="ubah.php?id=<?= $i["id"] ?>"><button class="change">Ubah</button></a>
                        </div>
                    </td>
                    <td><img width="100px" src="../assets/img/<?= $i["photo"]; ?>"></td>
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
    </div>
</body>

</html>