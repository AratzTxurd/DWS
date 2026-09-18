<?php
$paises = array("alemania","brasil","italia","txile","uruguay","australia");
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikasleen presentzia</title>
</head>
<body>
<?php
echo "Lehen:<br>";
foreach ($paises as $pais) {
    echo $pais . " , ";
}
unset($paises[0],$paises[2], $paises[5]); echo "<br>";
echo "Ezabatu eta gero:<br>";
foreach ($paises as $pais) {
    echo $pais . " , ";
}
array_push($paises,"argentina","bolivia");echo "<br>";
echo "Gehitu eta gero:<br>";
foreach ($paises as $pais) {
    echo $pais . " , ";
}echo "<br>";
sort($paises);
print_r($paises);
?>
</body>
</html>