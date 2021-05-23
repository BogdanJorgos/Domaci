<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }
        .green {
            color: green;
        }
    </style>
</head>
<body>
    <?php
        $a = 0;
        $b = 1;
        $c = 30;
        $d = 100000;
        while($b<$d){
            $a = $b;
            $b = $b * $c;
            $c--;
            // 30,29,28,27 ==> sledeci bi bio 26
        }

        echo "<p>proizvod prelazi $d brojem <span class='red'>$b</span></p>";
        $p = $c + 1; // 26 + 1
        echo "<p>poslednje pomnozeni broj je <span class='green'>$p</span></p>";
    ?>
</body>
</html>