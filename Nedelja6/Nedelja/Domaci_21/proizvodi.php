<?php
    include_once ('proizvod.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        proizvod ('crna cokolada', 'crna-cokolada.jpg', 600, 50);
        proizvod ('kukuruz', 'kukuruz2.jpg', 800, 100);
        proizvod ('sladoled', 'sladoled.png', 500, 0);
    ?>
</body>
</html>