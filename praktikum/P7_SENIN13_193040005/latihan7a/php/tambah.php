<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href='admin.php';
          </script>";
  } else {
    echo "<script>
    alert('Data Gagal ditambahkan!');
    document.location.href='admin.php';
  </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Baju</title>
</head>

<body>
  <table border="1" cellspacing="0" cellpadding="5">
    <form action="" method="post">

      <th colspan="3">
        <h3>Tambah Data Baju Anda</h3>
      </th>
      <tr>
        <td>
          <label for="photo">Photo</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="img" id="img" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="merk">Merk</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="merek" id="merek" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="type">type</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="type" id="type" required>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="tambah">Tambah Data!</button>
          <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
          </button>
        </td>
      </tr>
    </form>
  </table>

</body>
</html>