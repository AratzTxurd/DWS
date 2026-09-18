<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
const DENDA_IZENA  =   "TxShop Txurdinaga";
const BEZ_EHUNEKOA  = 21;
const GARRAIO_PREZIOA  =  5.99;
const DOAN_GARRAIO_MUGA= 50;

$produktu1_izena= "Ordenagailu sagua";
$produktu1_prezioa = 25.50;
$produktu1_kantitatea = 2;
$produktu2_izena = "Teklatua";
$produktu2_prezioa = 45.00;
$produktu2_kantitatea = 1;
$produktu3_izena = "Pantaila kablea";
$produktu3_prezioa = 15.75;
$produktu3_kantitatea = 3;

$guztizko_prezioa_produktu1= $produktu1_prezioa * $produktu1_kantitatea;
$guztizko_prezioa_produktu2= $produktu2_prezioa * $produktu2_kantitatea;
$guztizko_prezioa_produktu3= $produktu3_prezioa * $produktu3_kantitatea;

$azpitotala = $produktu1_prezioa + $produktu2_prezioa + $produktu3_prezioa;
$BEZ_kantitatea= $azpitotala * BEZ_EHUNEKOA / 100;
$garraio_kostua = $azpitotala > DOAN_GARRAIO_MUGA ? 0 : GARRAIO_PREZIOA;
$faktura_totala = $azpitotala + $BEZ_kantitatea + $garraio_kostua;
$kopuru_totala= $produktu1_kantitatea + $produktu2_kantitatea + $produktu3_kantitatea;
$garestiena= max($produktu1_prezioa, $produktu2_prezioa, $produktu3_prezioa);
$Batez_bestekoa= $azpitotala / 3;

echo $azpitotala ."<br>";
echo $BEZ_kantitatea ."<br>";
echo $garraio_kostua ."<br>";
echo $faktura_totala ."<br>";
echo $kopuru_totala ."<br>";
echo $garestiena ."<br>";
echo $Batez_bestekoa ."<br>";

?>

</body>
</html>