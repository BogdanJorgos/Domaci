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
        // pod a)

        function neki_niz(){
            $niz = $_GET['niz'];
            $x = explode(" ", $niz);
            return $x;
        }
        $a = neki_niz();
        echo "niz je: ".join(" ",$a);

        // pod b)

        $x = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        function paran_broj($b){
            $ima = false;
            $brojac = 0;
            for($i=0; $i<count($b); $i++){
                if($b[$i] % 2 == 0){
                    $brojac++;
                    if ($brojac >= 3){
                        $ima = true;                        
                        break;
                    }
                }
            }
            return $ima;
        }
        echo "<br>";
        $y = paran_broj($x);
        var_dump($y);

        // pod c)

        function manjeOd1000($c){
            $jeste = true;
            for($i=0; $i<count($c); $i++){
                if ($c[$i] > 1000){
                    $jeste = false;
                }
            }
            return $jeste;
        }
        echo "<br>";
        $v = manjeOd1000($x);
        var_dump($v);

        // pod d)

        function provera($m){
            $y = paran_broj($m);
            $v = manjeOd1000($m);
            var_dump($y);
            echo "<br>";
            var_dump($v);
        }
        echo "<br>";
        echo provera($a);

    ?>
</body>
</html>