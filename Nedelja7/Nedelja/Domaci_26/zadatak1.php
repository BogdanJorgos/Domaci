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
        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
        ];
        $niz = array_map(function($osoba){
            $osoba['god_staza'] = " ";
            for($i=0; $i<4; $i++){
                $osoba['god_staza'] = mt_rand(1,3);
            }
            return $osoba;
        },$x);
        print_r($niz);
        echo "<br />";
        echo "<br />";
        usort($niz, function($a, $b){
            if( $a['god_staza'] > $b['god_staza'] )
                return -1;
            else    
                return 1;
        });
        print_r($niz);
        echo "<br />";
        echo "<br />";
        $b = [];
        for($i=0; $i<count($niz); $i++){
            $b[$i] = $niz[$i]['god_staza'];
        }
        $max =  max($b);
        $max_radni_staz = array_filter($niz, function($osoba){
            global $max;
            if( $osoba['god_staza'] == $max )
                return true;
            else 
                return false;
        });
        print_r($max_radni_staz);
    ?>
</body>
</html>