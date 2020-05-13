<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("loaction: login.php");
  exit;
}

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
          <input type="text" name="photo" id="photo" required value="<?= $pakaian['photo']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="merk">Merk</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="merk" id="merk" required value="<?= $pakaian['merk']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="type">Type</label>
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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Halaman Login</title>
</head>

<body>

  <div class="container mt-5">
    <div class="row justify-content-md-center">
      <div class="col-md-4 card pt-3 pb-3">
        <h3>Tambah Data Baju</h3>
        <form action="" method="POST">
          <input type="hidden" name="id" id="id" value="<?= $pakaian['id']; ?>">
          <div class="form-group">
            <label>Photo</label>
            <input type="text" class="form-control" placeholder="Photo" name="photo" required value="<?= $pakaian['photo']; ?>">
          </div>
          <div class="form-group">
            <label>Merk</label>
            <input type="text" class="form-control" placeholder="Merk" name="merk" required value="<?= $pakaian['merk']; ?>">
          </div>
          <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control" placeholder="Type" name="type" required value="<?= $pakaian['type']; ?>">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" required value="<?= $pakaian['alamat']; ?>">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" placeholder="Harga" name="harga" required value="<?= $pakaian['harga']; ?>">
          </div>
          <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
          <a class="btn btn-secondary" href="admin.php">Kembali</a>
        </form>


      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>