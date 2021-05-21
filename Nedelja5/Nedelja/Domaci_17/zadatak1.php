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
        $ime = "Bogdan";
        $prezime = "Jorgovanovic";
        function prikaz(){
            global $ime, $prezime;
            echo "<p><span>$ime</span> <span>$prezime</span></p>";
        }
        $ime1 = strlen($ime);
        $prezime1 = strlen ($prezime);
        $zbir = $ime1 + $prezime1;
        
        for ($i=1; $i<=$zbir; $i++){
            prikaz();
        }
    ?>
</body>
</html>