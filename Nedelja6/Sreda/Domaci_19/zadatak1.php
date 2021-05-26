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
        echo "<table border='1'>";
        $brojac1 = 0;
        $brojac2 = 0;
        for($i=0; $i<=2; $i++){
            $brojac1+=2;
            $brojac2 = 0;
            echo "<tr>";
            for($j=0; $j<=3; $j++){
                $brojac2+=3;
                echo "<td>";
                echo "$brojac1 - $brojac2";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>