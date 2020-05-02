<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM pakaian")
?>
<html>

<head>
  <title>Latihan 6 A</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>PAKAIAN</h1>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Photo</th>
      <th>Type</th>
      <th>Merk</th>
      <th>Alamat</th>
      <th>Harga</th>
    </tr>
    <?php foreach ($result as $i) { ?>
      <tr>
        <td><?= $i["id"]; ?></td>
        <td><img width="100px" src="assets/img/<?= $i['photo']; ?>"></td>
        <td><?= $i["type"]; ?></td>
        <td><?= $i["merk"]; ?></td>
        <td><?= $i["alamat"]; ?></td>
        <td><?= $i["harga"]; ?></td>
      </tr>
    <?php } ?>
    <center>
      <button class="admin">
        <a href="php/admin.php">Admin Disini!!!</a>
      </button>
    </center>
  </table>
  <h5 align="center"></h5>
</body>
</html>