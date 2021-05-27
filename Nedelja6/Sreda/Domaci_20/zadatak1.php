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
        
        function veci($a, $b, $c) {
              if($a > $b && $a > $c) {
                  return $a;
              }elseif($b > $a && $b > $c){
                 return $b;
              }else{
                  return $c;
              }
        }
        echo veci(20,777,100);
        
    ?>
</body>
</html>