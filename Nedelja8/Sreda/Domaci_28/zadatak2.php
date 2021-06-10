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
        include "../Domaci_27/zadatak1.php";    

        class Baldahin extends Krevet {
            public $visina, $cenaBaldahina;

            public function __construct($dduzina, $ssirina, $mmaterijal, $ccena, $visina, $cenaBaldahina){
                $this->visina = $visina;
                $this->cenaBaldahina = $cenaBaldahina;
                parent::__construct($dduzina, $ssirina, $mmaterijal, $ccena);
            }

            public function __toString(){
                return "Cena kreveta bez baldahina je ".$this->citanje_cene()." a sa baldahinom je ".$this->cenaBaldahina + $this->citanje_cene();
            }
        }
        $s1 = new Baldahin(120, 70, 'stof', 20000, 140, 40000);
        echo $s1;
        
    ?>
</body>
</html>