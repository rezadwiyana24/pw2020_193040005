<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$pakaian = query("SELECT * FROM pakaian ORDER BY merk ASC");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $pakaian = query(
    "SELECT * FROM pakaian WHERE
        img LIKE '%$keyword%' OR
        merek LIKE '%$keyword%' OR
        ukuran LIKE '%$keyword%' ");
} else {
  $pakaian = query("SELECT * FROM pakaian");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/admin.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <br>
  <form action="" method="get">
    <input type="text" name="keyword" autofocus placeholder="Masukan yang anda cari" autocomplete="off">
    <button type="submite" name="cari">Cari</button>
  </form>
  <br>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
  <a href="../index.php"><button>Kembali ke INDEX</button></a>
    <table border="1" cellpadding="13" cellspacing="2">
      <tr class="thead">
        <th colspan="8">
          <h1>Data Baju</h1>
        </th>
      </tr>
      <tr class="title_table">
        <th>No</th>
        <th>Opsi</th>
        <th>Photo</th>
        <th>Merk</th>
        <th>type</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($pakaian as $b) : ?>
        <tr>
          <td class="no"><?= $i ?></td>
          <td class="opsi">
            <a href="ubah.php?id=<?= $b['id'] ?>" class="ubah"><button>Ubah</button></a>
            <a href="hapus.php?id=<? $b['id'] ?>" onclick="return confirm('Hapus Data?')" class="hapus"><button>Hapus</button></a>
          </td>
          <td class="photo"><img src="../assets/img/<?= $b['photo']; ?>"></td>
          <td class="merk"><?= $b["merk"]; ?></td>
          <td class="type"><?= $b["type"]; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
</body>
</html>