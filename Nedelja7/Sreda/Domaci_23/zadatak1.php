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
        $x = ["jedann", "dva", "tri", "cetiri"];
        $y=[];
        
        for($i=0; $i<count($x); $i++){
            if(strlen($x[$i]) < 5){
                array_push($y, "<span style='color: red'>$x[$i]</span>");
            } else {
                array_push($y, "<span style='color: green'>$x[$i]</span>");
            }
        }
        echo "<br />";
        echo "<br />";
        echo "niz je: ".join(",",$y);

    ?>
</body>
</html>