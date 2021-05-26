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
        $broj = mt_rand(1, 64);
        $a = 1;
        echo "<table>";
        for($i = 0; $i < 8; $i++){
            echo "<tr>";
            for($o = 0; $o < 8; $o++){
                if($a == $broj){
                    echo "<td style='background-color: black; width: 30px; height: 30px; border: 1px solid black;'></td>";
                } else {
                    echo "<td style='width: 30px; height: 30px; border: 1px solid black;'></td>";
                }
                $a++;
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
