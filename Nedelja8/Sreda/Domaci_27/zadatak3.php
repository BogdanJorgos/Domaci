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

            public function popust($popust){
                $popust = $popust / 100;
                $this->cena = $this->citanje_cene() - $this->citanje_cene() * $popust;
            }

            public function __toString(){
                return "Krevet duzine $this->duzina cm i sirine $this->sirina cm od materijala $this->materijal kosta ".$this->citanje_cene()."din";
            }
        }
        
        $p1 = new Krevet1('120', '70', 'stof', 100000);
        echo $p1; 
        $p1->popust(10);
        echo "<br />";
        echo $p1." sa uracuntim popustom od 10%";
    ?>
</body>
</html>