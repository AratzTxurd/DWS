<?php
function unitateBatGehitu(&$zenbakia){
	$zenbakia++;
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
$zenbakia = 7;
echo "Hasierako zenbakia: $zenbakia<br>";
unitateBatGehitu($zenbakia);
echo "Funtzioa aplikatu ondoren: $zenbakia";
?>
</body>
</html>