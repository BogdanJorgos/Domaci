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
        class Krevet{
            private $cena;
            public $duzina, $sirina, $materijal;

            public function __construct($dduzina, $ssirina, $mmaterijal, $ccena){
                $this->duzina = $dduzina;
                $this->sirina = $ssirina;
                $this->materijal = $mmaterijal;
                $this->cena = $ccena;
            }

            public function daj_cenu(){
                return $this->cena;
            }

            public function __toString(){
                return "Krevet je duzine $this->duzina i sirine $this->sirina i napravljen od $this->materijal po ceni ".$this->daj_cenu();
            }
        }

        class Baldahin extends Krevet {
            public $visina, $cenaBaldahina;

            public function __construct($dduzina, $ssirina, $mmaterijal, $ccena, $visina, $cenaBaldahina){
                $this->visina = $visina;
                $this->cenaBaldahina = $cenaBaldahina;
                parent::__construct($dduzina, $ssirina, $mmaterijal, $ccena);
            }

            public function __toString(){
                return "Cena kreveta bez baldahina je ".$this->daj_cenu()." a sa baldahinom je ".$this->cenaBaldahina + $this->daj_cenu();
            }
        }
        $s1 = new Baldahin(120, 70, 'stof', 20000, 140, 40000);
        echo $s1;
        
    ?>
</body>
</html>