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
        
        $name1 = "Pera";
        $name2 = "Jovan";
        $ime1_br = strlen($name1);
        $ime2_br = strlen($name2);

        function duze_ime() {
            global $name1, $name2, $ime1_br, $ime2_br;

            if ( $ime1_br > $ime2_br){
                echo "<p>Duze ime je $name1</p>";
            } else {
                echo "<p>Duze ime je $name2</p>";
            }
        }

        duze_ime();   
    ?>
</body>
</html>