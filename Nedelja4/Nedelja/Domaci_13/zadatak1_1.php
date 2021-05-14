<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci13</title>
</head>
<body>
    <?php
    //  echo "<p></p>";
        $a = mt_rand(1,50);
        $b = mt_rand(1,50);

        echo "$a, $b";
        echo "<br/>";

        if ( $a > $b) {
            echo "<p style='color: green;'>$a</p>";
        } else {
            echo "<p style='color: red;'>$b</p>";
        }
    ?>
    
</body>
</html>