<?php 
$izen_abizena = "Aratz Elexpe";
 $izen_abizena_larriz= strtoupper($izen_abizena);
 $izen_abizena_xehez= strtolower($izen_abizena); 
 $izen_abizena_luzera= strlen($izen_abizena);
 $lehenengoa = substr($izen_abizena, 0, 1);
 $azkena = substr($izen_abizena, -1);
 $hirugarren_karakterea = substr($izen_abizena, 2 , 1);
 $bostgarren_karakterea = substr($izen_abizena, 4, 1);
 $zatiak = explode(" ", $izen_abizena);
 $izena = ucfirst(strtolower($zatiak[0]));
 $abizena = ucfirst(strtolower($zatiak[1]));
?>

<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

 echo "Izen-Abizena letra larriz: " . $izen_abizena_xehez . "<br>";
 echo "Izen-Abizena letra larriz: " . $izen_abizena_larriz . "<br>";
 echo "Izen-abizenaren luzera: " . $izen_abizena_luzera . "<br>";
 echo "Lehenengo karakterea: " . $lehenengoa . "<br>";
 echo "Azken karakterea: " . $azkena . "<br>";
 echo "Izena: " . $izena . "<br>";
 echo "Abizena: " . $abizena . "<br>";
 echo "3. karakterea: " . $hirugarren_karakterea . "<br>";
 echo "5. karakterea: " . $bostgarren_karakterea . "<br>";


?>
</body>
</html>