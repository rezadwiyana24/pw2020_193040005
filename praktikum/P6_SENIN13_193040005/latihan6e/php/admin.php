<?php
    // menghubungkan dengan file php lainnya
    require 'function.php';
    // melakukan query

    // tombol cari di click
    if(isset($_GET['cari'])){
        $keyword = $_GET ["keyword"];
        $alat_musik = query("SELECT * FROM pakaian WHERE
                    photo LIKE '%$keyword%' OR
                    type  LIKE '%$keyword%' OR
                    merk LIKE '%$keyword%' OR
                    alamat LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'

                    ");
    } else {
        $pakaian = query("SELECT * FROM pakaian");
    }
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
            <form action="" method="get">
                <input type="text" name="keyword"  size="40" autofocus placeholder="Masukkan Keyword" autocomplete="off">
                <button type="submit" name="cari">Cari!</button>
            </form>
        <table border="1" cellpadding="13" cellspacing="2">
            <tr>
                <th>Opsi</th>
                <th>Type</th>
                <th>Merk</th>
                <th>Alamat</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php if (empty($pakaian)) : ?>
                <tr>
                    <td colspan="6">
                        <h1>Data tidak ada!</h1>
                    </td>
                </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($pakaian as $i) : ?>
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
            <?php endif; ?>
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