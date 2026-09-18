<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$zenbakia1 = 10;
$zenbakia2 = 5;

$batuketa= $zenbakia1 + $zenbakia2;
$kenketa= $zenbakia1 - $zenbakia2;
$biderketa= $zenbakia1 * $zenbakia2;
$zatiketa= $zenbakia1 / $zenbakia2;
$batuketa= $zenbakia1 + $zenbakia2;

echo "<p> Lehenengo zenbakia = $zenbakia1</p>";
echo "<p> Bigarren zenbakia = $zenbakia2</p>";
echo "<p> Batuketa = $batuketa</p>";
echo "<p> Kenketa  = $kenketa</p>";
echo "<p> Biderketa  = $biderketa</p>";
echo "<p> Zatiketa  = $zatiketa</p>";


        $a = 5;
        $b = ++$a;
        echo "a aldagaiaren balioa da $a eta b aldagaiarena $b \n" ;

        $a = 5;
        $b = $a++;
        echo "a aldagaiaren balioa da $a eta b aldagaiarena $b \n" ;
    

?>
</body>
</html>