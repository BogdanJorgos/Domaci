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
        $a = mt_rand(1,500);
        $b = mt_rand(1,500);
        $c = mt_rand(1,500);

        echo "$a, $b i $c";
        echo "<br/>";

        if ( $a > $b && $a > $c) {
            if ( $b > $c ){
                echo "$c, $b, $a";
            } else
                echo "$b, $c, $a";
        }elseif ($a > $b && $a < $c){
            echo "$b, $a, $c";
        }elseif ( $b > $c && $a > $c) {
            echo "$c, $a, $b";
        }elseif ( $b > $c && $a < $c) {
            echo "$a, $c, $b";
        }else {
            echo "$a, $b, $c";
        }
    ?>
</body>
</html>