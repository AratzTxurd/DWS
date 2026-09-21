<?php
$zenbaki_sekretua = rand(1,10);
$asmatu = false;
$hautatutako_zenbakiak = [];
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
while ($saiakera_kopurua < 5) {
    $asmatutako_zenbakia = rand(1, 10);

    if (in_array($asmatutako_zenbakia, $hautatutako_zenbakiak, true)) {
        echo "Zenbakia $asmatutako_zenbakia berriro aukeratu duzu, saiatu berriz.<br>";
        continue;
    }

    $hautatutako_zenbakiak[] = $asmatutako_zenbakia;
    $saiakera_kopurua++;
    echo "Saiakera $saiakera_kopurua: $asmatutako_zenbakia<br>";

    if ($asmatutako_zenbakia === $zenbaki_sekretua) {
        echo "Zuzen asmatu duzu, zenbakia $zenbaki_sekretua zen!<br>";
        echo "Saiakera kopurua: $saiakera_kopurua<br>";
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