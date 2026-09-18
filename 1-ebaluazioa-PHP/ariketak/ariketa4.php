<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
const UNIBERTSITATEA =  "Euskal Herriko Unibertsitatea";
const GRADU_KREDITOAK = 240;
const IKASTAROA_PREZIOA = 1250.75;

$ikasle_izena = "Aratz Elexpe";
$orain_arte_kreditoak = 45;
$batez_besteko_nota = 7.8;
$ikastaro_bukatua = false;
$falta_diren_kredituak = GRADU_KREDITOAK - $orain_arte_kreditoak;

echo "<h2>Ikaslearen informazioa</h2>" ;
echo "<p>Ikaslearen izena: $ikasle_izena</p>";
echo "<p>Unibertsitatea: " . UNIBERTSITATEA . "</p>";
echo "<p>Orain arteko kreditoak: $orain_arte_kreditoak / " . GRADU_KREDITOAK . "</p>";
echo "<p>Batez besteko nota: $batez_besteko_nota</p>";
echo "<p>Falta diren kredituak: $falta_diren_kredituak</p>";
echo "<p>Ikastaroa bukatuta: " . ($ikastaro_bukatua ? "Bai" : "Ez") . "</p>";
echo "<p>Ordaindu beharreko prezioa: " . IKASTAROA_PREZIOA . "€</p>";
?>
</body>
</html>