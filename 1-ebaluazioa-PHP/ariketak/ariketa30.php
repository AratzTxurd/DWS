<?php
function kalkulatuBEZa($salneurria, $BEZa = 21){
	return $salneurria * $BEZa / 100;
}

?>
<!DOCTYPE html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Erreferentziazko parametroa</title>
</head>
<body>
<?php
$salneurria = 100;
$BEZa = kalkulatuBEZa($salneurria);

echo "Produktuaren salneurria: {$salneurria} euro<br>";
echo "BEZa (%21): {$BEZa} euro";

?>
</body>
</html>