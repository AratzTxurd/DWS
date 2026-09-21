<?php
$zenbakia1 = rand(1, 10);
$zenbakia2 = rand(1, 10);

function arit($zenbakia1, $zenbakia2){
    $batasbestekoa= $zenbakia1+$zenbakia2;
    $batasbestekoa= $batasbestekoa/2;
    return $batasbestekoa;
}
?>
<!DOCTYPE html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bidaia-desioen zerrenda</title>
</head>
<body>
<?php
$batasbestekoa = arit($zenbakia1, $zenbakia2);
echo "Zenbakiak: $zenbakia1 eta $zenbakia2 = Batasbestekoa: $batasbestekoa<br>";
?>
</body>
</html>