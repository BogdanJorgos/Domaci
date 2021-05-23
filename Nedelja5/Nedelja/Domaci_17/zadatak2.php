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
        $n = mt_rand(1,10);
        $x = mt_rand(1,10);
        echo "n=$n, x=$x"; 

        function svasta() {
            global $n, $x; 
            for($i=1; $i<=$n; $i++){
                echo "<span>Ovo je span $i </span>";
            }
        }
        for ($a=1; $a<=$x; $a++){
            echo "<div>";
            svasta();
            echo "</div>";
        }
    ?>
</body>
</html>