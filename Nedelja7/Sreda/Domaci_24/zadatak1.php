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
        $x = [2, 5, 9, 20, 8, 22];
        function nule($b){
            $a = true;
            for($i=0; $i<count($b); $i++)
                if ($b[$i] == 0)
                    $a = false;
            return $a;
        }
        $c = nule($x);
        var_dump($c);
    ?>
</body>
</html>