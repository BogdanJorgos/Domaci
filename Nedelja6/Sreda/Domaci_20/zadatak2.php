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
        function neka( $a ) {
            echo "<div>";
            for($i=1; $i<=$a; $i++){
                echo "<span>$i</span><br />";
            }
            echo "</div>";
        }
        neka(7);
    ?>
</body>
</html>