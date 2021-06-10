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
                return " ,a Baldahin je visine $this->visina po ceni $this->cenaBaldahina";
            }
        }
        $s1 = new Baldahin(120, 70, 'stof', 15000, 140, 40000);
        echo $s1;
    ?>
</body>
</html>