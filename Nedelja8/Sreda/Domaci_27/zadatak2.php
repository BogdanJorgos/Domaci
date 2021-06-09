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
        class Krevet1{
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
                return $this->citanje_cene();
            }
        }
        class Krevet2{
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
                return $this->citanje_cene();
            }
        }
        $p1 = new Krevet1('120', '70', 'stof', 111000);
        $p2 = new Krevet2('120', '70', 'stof', 115000);

        // echo $p1->citanje_cene();
        // echo "<br>";
        // echo $p2->citanje_cene();
        // echo "<br>";
        // echo "<br>";

        if($p1->citanje_cene() > $p2->citanje_cene())
            echo "Krevet1 ima cenu ".$p1->citanje_cene();
        else
            echo "Krevet2 ima cenu ".$p2->citanje_cene();
        

    ?>
</body>
</html>