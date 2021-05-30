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
    function niz($a,$b){
        $n=[];
        for($i=0; $i<10; $i++)
            $n[$i]=mt_rand($a,$b);
        return $n;
    }
    $niz = niz(50,150);
    var_dump($niz);
    echo "<br />";
    echo "<br />";
    function numbers($n){
        $dvocif=0;
        $trocif=0;
        for($i=0; $i<count($n); $i++){
            if( $n[$i] < 100 )
                $dvocif++;
            else
                $trocif++;
        }
        if( $dvocif > $trocif )
            echo "<p>Ima vise dvocifrenih brojeva</p>";
        elseif( $trocif > $dvocif )            
            echo "<p>Ima vise trocifrenih brojeva</p>";
        else
            echo "<p>Broj je jednak</p>";
    }
    numbers($niz);
?>
</body>
</html>