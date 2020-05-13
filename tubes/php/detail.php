<?php

// mengecek apakah id yang dikirim
// jika tidak maka akan dikembalaikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

//mengambil id dr url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>193040005</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">REZA HYPEBEAST</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <form class="form-inline mr-2" action="../index.php">
                        <input class="form-control mr-sm-2" type="search" size="60" placeholder="Search" aria-label="Search" name="keyword">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari">Cari</button>
                    </form>
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item btn btn-primary" href="php/login.php">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h1>DETAIL <?= $pakaian['merk']; ?></h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card pt-3 pb-3">
                    <img src="../assets/img/<?= $pakaian['photo']; ?>" alt="">
                </div>
            </div>
            <div class="col">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $pakaian['merk']; ?></li>
                    <li class="list-group-item"><?= $pakaian['type']; ?></li>
                    <li class="list-group-item"><?= $pakaian['alamat']; ?></li>
                    <li class="list-group-item font-weight-bold text-primary">Rp. <?= $pakaian['harga']; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>