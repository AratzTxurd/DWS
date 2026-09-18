<?php
$zenbaki_sekretua = rand(1,10);
$asmatu = false;
?>
<!DOCTYPE html> 
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenbakia asmatu</title>
</head>
<body>
<?php
$saiakera_kopurua = 0;
for ($saiakera_kopurua = 1; $saiakera_kopurua <= 5; $saiakera_kopurua++) {
    $asmatutako_zenbakia = rand(1, 10);
    echo "Saiakera $saiakera_kopurua: $asmatutako_zenbakia<br>";

    if ($asmatutako_zenbakia === $zenbaki_sekretua) {
        echo "Zuzen asmatu duzu, zenbakia $zenbaki_sekretua zen!<br>";
        $asmatu = true;
        break;
    }
    echo "Saiakera okerra, berriro saiatzen...<br>";
}
if (!$asmatu) {
    echo "Ez duzu zenbakia asmatu 5 saiakeretan. Zenbaki sekretua $zenbaki_sekretua zen.<br>";
}
?>
</body>
</html>