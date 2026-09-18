<?php 
$izena="Garazi";
$abizen1="Elexpe";
$abizen2="Hoz";
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
     
     if ($izena == "Garazi"){
         echo "Ongi etorri $izena $abizen1 $abizen2!";
     }elseif ($abizen1 == "Olabarria" && $abizen2 == "Iriondo"){
        echo "Ongi etorri $izena $abizen1 $abizen2!";
     }else {
        echo "Ez du sarbiderik";
     }

?>
</body>
</html>