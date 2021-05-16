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
        $imeprezime = $_GET['imeprezime']; 
        $ime = substr ($imeprezime, 0, 1);
        $razmak = strpos ($imeprezime, " ");
        $razmak1 = $razmak + 1;
        $prezime = substr ($imeprezime, $razmak1, 1);

        echo "<p>$ime.$prezime.</p>";
    ?>
</body>
</html>