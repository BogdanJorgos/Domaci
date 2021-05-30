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
        $menu = ["Stavka 1", "Stavka 2", "Stavka 3"];
        function lista($a){
            echo "<ul type=none>";
            foreach($a as $stavka){
                echo "<li>$stavka</li>";
            }
            echo "</ul>";
        }
        lista($menu);
    ?>
</body>
</html>