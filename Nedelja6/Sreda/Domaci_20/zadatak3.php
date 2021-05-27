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
        function createDivs ($n, $m){
            for ($i=1; $i<=$n; $i++){
                echo "<div>";
                    for ($j=1; $j<=$m; $j++){
                        echo "<span>$j</span><br />";
                    }
                echo "</div><br />";
            }
        }
        createDivs(5,2);
    ?>
</body>
</html>