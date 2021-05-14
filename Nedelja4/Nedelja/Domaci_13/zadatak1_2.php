<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci13</title>
    <style>
        .green {
            color: green;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        //  echo "<p></p>";
        $a = mt_rand(1,50);
        $b = mt_rand(1,50);

        echo "$a, $b";
        echo "<br/>";

        if ( $a > $b ) {
            $klasa = "green";
            echo "<p class=\"$klasa\">$a</p>";
        } else {
            $klasa = "red";
            echo "<p class=\"$klasa\">$b</p>";
        }
    ?>
    
</body>
</html>