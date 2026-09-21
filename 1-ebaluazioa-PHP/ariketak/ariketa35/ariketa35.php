<?php
$zenbakia = rand(0,5);

?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa35</title>
</head>
<body>
    <?php 
    include "header.php";
switch($zenbakia){
    case(0):
        echo 0;
        break;
    case(1):
        echo 1;
        break;
    case(2):
        echo 2;
        break;
    case(3):
        echo 3;
        break;
    default:
    echo  "Ez badago 0 eta 3ren artean “Zenbakia ez dago 0 eta 3 artean” mezua atera behar da.";
}
    include "footer.php";
    ?>
</body>
</html>