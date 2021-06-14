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
    //prvi zadatak

    class SastojakHrane {
        public $naziv, $mera, $kalorije;

        public function __construct($naziv, $mera, $kalorije){
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }

        public function promeniMeru($menjaMeru){
            $this->mera = $menjaMeru;
        }

        public function prikazi(){
            echo "<p> Naziv: $this->naziv <br /> Mera: $this->mera <br /> Kalorije: $this->kalorije";
        }
    }

    // $p1 = new SastojakHrane ('Kecap', '100g', '250kcal');
    // echo $p1->prikazi();

    include "podaci.php";

    class Jelo {
        public $naslov, $opis, $sh;

        function __construct($naslov, $opis, $podaci){
            $this->naslov = $naslov;
            $this->opis = $opis;
            $this->sh = [];

            for($i=0; $i<count($podaci); $i++){
                $sastojak  = new SastojakHrane( $podaci[$i]['naziv'], $podaci[$i]['mera'], $podaci[$i]['kalorije']);
                array_push($this->sh, $sastojak);
            }
        }

        function prikazi1(){
            echo "<p>";
            echo "Naslov: $this->naslov";
            echo "<br />";
            echo "Opis: $this->opis";
            echo "<br />";
            echo "Sastojci: ";
            for($i = 0; $i <count($this->sh);$i++) {
                $this->sh[$i]->prikazi();
            }
            echo "</p>";
        }
        function promeniMeru1( $naziv, $nmera){
            for($i=0;$i<count($this->sh);$i++){
                if($this->sh[$i]->naziv == $naziv)
                    $this->sh[$i]->mera = $nmera;
            }
        }
    }
    $jelo = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi1();
    echo "<br>";
    $jelo->promeniMeru1("brasno", "30g");
    $jelo->prikazi1();

    
?>
</body>
</html>