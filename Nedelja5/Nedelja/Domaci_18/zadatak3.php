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
        $a = " ";
        for ($i=30; $i<100; $i++){
            $cifra1 = substr($i, 0, 1);
            $cifra2 = substr($i, 1);
            if ( $cifra1 % 3 == 0 || $cifra2 % 4 == 0 ){
                continue;
            }
            $a .= "$i, ";
        }
        echo "<p>To su brojevi: $a</p>";
    ?>
</body>
</html>