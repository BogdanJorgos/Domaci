<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 200px;
            display: inline-block;
        }
        img {
            height: 200px;
            width: 200px;
        }
        .red {
            color: red;
        }
        .green {
            color: green;
        }
    </style>
</head>
<body>
    <?php
        function proizvod($naziv, $slika, $cena, $popust){
            echo "<div>";
            echo "<img src='./Slike/$slika'><br>";
            echo "<p>$naziv</p>";
        
            if ($popust > 0 ){
                $cena_popust = $cena - $popust;
                echo "<p class='red'>Regularna cena: $cena rsd</p>";
                echo "<p class='green'>Sa popustom: $cena_popust rsd</p>";
            }else
                echo "<p>Regularna cena: $cena rsd<p><br>";
            echo "</div>";
        }
        // proizvod ('a', 22, 333, 5);
    ?>
</body>
</html>