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
        $x = [2, 34, 22, 65, 3, 8, 45];
        $y = [];
        $s = 0;
        $counter=0;
        for($i=0; $i<count($x); $i++){
            $s += $x[$i];
            $counter++;
        }
        $average = number_format($s/$counter, 1);
        echo "prosek je: $average"."<br />";

        for($i=0; $i<count($x); $i++){
            if($x[$i] > $average){
                array_push($y, $x[$i]);
            }
        }
        echo "niz je: ".join(",",$y);
    ?>
</body>
</html>