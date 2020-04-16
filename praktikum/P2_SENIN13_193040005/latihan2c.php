<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan2c</title>
    <style>
    .bulet  {
        height: 60px;
        width: 60px;
        background-color: salmon;
        color: black;
        border: 2px solid black;
        border-radius: 50px;
        font-size: 40px;
        line-height: 50px;
        display: inline-block;
        margin: 5px;
        text-align: center;
    }
    .clear {
        clear: both;
    }
    </style>
</head>
<body>
    <?php
    for ($i=0; $i <= 3 ; $i++)
    {
        for($j=1; $j <= $i; $j++)
        {
        echo "<div class='bulet'>$i</div>";
        }
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>