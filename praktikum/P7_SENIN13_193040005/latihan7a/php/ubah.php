<?php
require 'functions.php';
$id = $_GET['id'];
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href='admin.php';
          </script>";
  } else {
    echo "<script>
    alert('Data Gagal diubah!');
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
  <title>Ubah Data Baju</title>
</head>

<body>
  <table border="1" cellspacing="0" cellpadding="5">
    <form action="" method="post">

      <th colspan="3">
        <h3>Ubah Data Baju Anda</h3>
      </th>

          <input type="hidden" name="id" id="id" value="<?= $b['id']; ?>">
      <tr>
        <td>
          <label for="photo">Photo</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="photo" id="photo" required value="<?= $pakaian['img']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="merk">Merk</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="merek" id="merek" required value="<?= $pakaian['merk']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="type">type</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="type" id="type" required value="<?= $pakaian['type']; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="ubah">Ubah Data!</button>
          <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
          </button>
        </td>
      </tr>
    </form>
  </table>

</body>

</html>