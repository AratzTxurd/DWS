<?php
 function balioaHanditu() {
    static $balioa = 0;
    $balioa++;
    return $balioa;
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
for ($i = 1; $i <= 3; $i++) {
    echo "Deitzen den aldia: $i - Itzultzen den balioa: " . balioaHanditu() . "<br>";
}
?>
</body>
</html>