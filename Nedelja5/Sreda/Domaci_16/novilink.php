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
        $broj1 = $_GET['broj1'];
        $broj2 = $_GET['broj2'];
        $broj3 = $_GET['broj3'];
        $broj4 = $_GET['broj4'];

        //echo "<p>$broj1, $broj2, $broj3, $broj4 <br /></p> <br />";
    
            $zbir1 = 0;
            $zbir2 = 0;
            if ( $broj2 > $broj1 && $broj4 > $broj3 ){
                for ($i=$broj1; $i<=$broj2; $i++){
                    if ($i % 4 == 0){
                        $zbir1 = $zbir1 + $i;
                    }
                }
                for ($a=$broj3; $a<=$broj4; $a++){
                    if ($a % 3 == 0) {
                        $zbir2 = $zbir2 + $a;
                    }
                }
            } else {
                die ("Uslov nije ispunjen");
            }
            if ( $zbir1 > $zbir2){
                echo "<p>veci je prvi zbir $zbir1 od drugog $zbir2</p>";
            } else {
                echo "<p>veci je drugi zbir $zbir2 od prvog $zbir1</p>";
            }
        

         
    ?>
</body>
</html>