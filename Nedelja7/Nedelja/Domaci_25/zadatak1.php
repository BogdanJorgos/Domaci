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

        
        // dodavanje 4 osobe

        array_push($x, 
        ['ime'=>"Pera", "godine"=>42, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Mika", "godine"=>10, "grad"=>"Kg", "pozicija"=>"dizajner"],
        ['ime'=>"Zika", "godine"=>35, "grad"=>"Ru", "pozicija"=>"menadzer"],
        ['ime'=>"Scepan", "godine"=>55, "grad"=>"NS", "pozicija"=>"programer"]);

        print_r($x);
        echo "<br />";

        // samo imena programera

        function names_of_programmers($x){
            foreach($x as $name){
                if($name['pozicija'] == 'programer')
                    echo $name['ime'].", ";
            }
        }
        echo "<p>To su: ";
        names_of_programmers($x);
        echo "</p>";

        // fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.

        function podaci_neke_osobe($x, $osoba){
            
            foreach($x as $el){
                if($osoba == $el['ime']){
                    echo join(", ", $el);
                }
            }
        }
        echo "<p>To je: ";
        podaci_neke_osobe($x, 'Zika');
        echo "</p>";
        echo "<br />";

        function osobe_sa_s($x){
            $y=[];
            for($i=0; $i<count($x); $i++){
                if(stripos($x[$i]['ime'], "s") !== false ){
                    array_push($y, $x[$i]);
                }
            }
            echo "<p>".var_dump($y)."</p>";
        }
        echo "<p>To su: ";
        podaci_neke_osobe($x, osobe_sa_s($x));
        echo "</p>";
        

        
    ?>
</body>
</html>