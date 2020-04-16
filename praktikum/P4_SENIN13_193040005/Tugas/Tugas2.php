<?php 
$baju = [
    [
        "photo" => "gucci1.jfif",
        "tipe" => "T-shirt",
        "merk" => "Gucci",
        "alamat" => "Jln.anggrek No.45 ",
        "harga" => "Rp. 5.000.000"
    ],
    [
        "photo" => "gucci2.jfif",
        "tipe" => "T-shirt",
        "merk" => "Gucci",
        "alamat" => "Jln.anggrek No.45 ",
        "harga" => "Rp.5.450.000"
    ],
    [
        "photo" => "h&m.jfif",
        "tipe" => "hoodie",
        "merk" => "h&m",
        "alamat" => "jln.Mawar No.71",
        "harga" => "Rp.1.000.000"
    ],
    [
        "photo" => "h&m2.jfif",
        "tipe" => "t-shirt",
        "merk" => "h&m",
        "alamat" => "jln.Mawar No.71",
        "harga" => "Rp.800.000"
    ],
    [
        "photo" => "pull.jfif",
        "tipe" => "Hoodie",
        "merk" => "pull and beer",
        "alamat" => "jln.gagak no117",
        "harga" => "Rp.1.000.000"
    
    ],
    [
        "photo" => "pull2.jfif",
        "tipe" => "T-shirt",
        "merk" => "pull and beer",
        "alamat" => "jln.jln.Mawar No.71",
        "harga" => "Rp.900.000"
    ],
    [
        "photo" => "green.jfif",
        "tipe" => "Hoodie",
        "merk" => "GreenLight",
        "alamat" => "jln.sukasari No.110",
        "harga" => "Rp.650.000"
    ],
    [
        "photo" => "green2.jfif",
        "tipe" => "T-shirt",
        "merk" => "GreenLight",
        "alamat" => "jln.jln.sukasari No.110",
        "harga" => "Rp.500.000"
    ],
    [
        "photo" => "queen2.jfif",
        "tipe" => "T-shirt",
        "merk" => "QueenBeer",
        "alamat" => "jln.bengawan No.21",
        "harga" => "Rp.400.000"
    ],
    [
        "photo" => "queen.jfif",
        "tipe" => "T-shirt",
        "merk" => "QueenBeer",
        "alamat" => "jln.bengawan No.21",
        "harga" => "Rp.350.000"
    ],
];
?>

<html>
    <head>
        <title>Tugas2_193040005</title>
    </head>
    <style>
        body {
            background-color: black;
        }
        table{
            background-color: white;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }
    
        td{
            padding : 20px;
            
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: white;
        }
        h5 a{
            text-decoration: none;
            color: white;
            font-size: 50px;
        }
    </style>
    <body>
        <h3>Pakaian Branded</h3>
        <table border="1px">
            <tr>
                <th>Gambar</th>
                <th>Tipe</th>
                <th>Merk</th>
                <th>Alamat Penjual</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($baju as $b) { ?>
            <tr>
                <td><img src="../img/<?= $b['photo']; ?>"></td>
                <td><?= $b["tipe"]; ?></td>
                <td><?= $b["merk"]; ?></td>
                <td><?= $b["alamat"]; ?></td>
                <td><?= $b["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
    </body>
</html>
