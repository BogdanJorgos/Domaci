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
        $a = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];
        function zadatak($a){
            $max = max($a);
            $min = min($a);
            $ind = array_search($max,$a);
            echo "Najuspesniji je: $ind";
            echo "<br />";
            foreach($a as $vrednost) {
                $z = array_sum($a);
                $p = number_format($z/count($a),2);
            }
            echo "Prosek je: $p";
            echo "<br />";
            $r = $max - $min;
            echo "Razlika je: $r";
        }
        zadatak($a);
    ?>
</body>
</html>