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

            public function citanje_cene(){
                return $this->cena;
            }

            public function __toString(){
                return "Krevet je duzine $this->duzina i sirine $this->sirina napravljen od $this->materijal po ceni ".$this->citanje_cene();
            }
        }
        $p1 = new Krevet('120', '70', 'stof', '15000');
        echo $p1;
        
    ?>
</body>
</html>