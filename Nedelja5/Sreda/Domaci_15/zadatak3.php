<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        $name1 = "Pera";
        $name2 = "Jovan";
        $ime1_br = 4;
        $ime2_br = 5;

        function duze_ime() {
            global $name1, $name2, $ime1_br, $ime2_br, $cl1;

            if ( $ime1_br > $ime2_br){
                $cl1 = "green";
                return $name1;
            } else {
                $cl1 = "red";
                return $name2;

            }
        }

        function krace_ime() {
            global $name1, $name2, $ime1_br, $ime2_br, $cl1;

            if ( $ime1_br < $ime2_br){
                $cl1 = "green";
                return $name1;
            } else {
                $cl1 = "red";
                return $name2;
            }
        }

        $d = duze_ime();
        echo "<p class=\"$cl1\">$d</p>";

        $k = krace_ime();
        echo "<p class=\"$cl1\">$k</p>";
            
    ?>   
</body>
</html>