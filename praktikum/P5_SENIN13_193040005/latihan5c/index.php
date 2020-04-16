<?php
    require 'php/functions.php';

    $pakaian = query("SELECT * FROM pakaian")

?>

<html>
    <head>
       

        <title>document</title>
       

    </head>
    
<body>
    <div class="container">
        <?php foreach ($pakaian as $pk) :?>
            <p class="type">
                 <a href="php/detail.php?id=<?= $pk['id'] ?>">
                    <?= $pk["type"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>