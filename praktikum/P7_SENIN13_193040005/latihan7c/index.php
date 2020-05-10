<?php
   // menghubungkan dengan file php lainnya
   require 'php/functions.php';

   // melakukan query
   $pakaian = query("SELECT * FROM pakaian")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            min-height: 650px;
        }

        .container {
            width: 40%;
            margin: 100px auto 150px;
            background-color: white;
            text-align: center;
        }

        h1 {
            background-color: orangered;
            margin: 0 auto;
            border-bottom: 2px solid red;
        }

        .container p a {
            background-color: white;
            color: blue;
            font-size: 25px;
            text-decoration: none;
            padding: auto;
            border-bottom: 1px solid black;
        }

        .container p a:hover {
            color: black;
            font-size: 26px;
            background-color: lightgrey;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6b</title>
</head>

<body>
    <a href="php/login.php">
        <button type="">Admin</button>
    </a>
    <div class="container">
        <h1>PAKAIAN</h1>
        <?php foreach ($pakaian as $b) : ?>
            <p>
                <a href="php/detail.php?id=<?= $b['id'] ?>">
                    <?= $b['merk'] ?>
                </a>
            </p>
         <?php endforeach; ?>
    </div>                                            
</body>
</html>