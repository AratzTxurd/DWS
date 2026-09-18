<?php
$frutak = array("laranja", "platanoa");
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
foreach ($frutak as $fruta) {
    echo $fruta . "<br>";
}
array_push($frutak,"limoia","sagarra");

echo "Orain:<br>";
foreach ($frutak as $fruta) {
    echo $fruta . "<br>";
}
?>
</body>
</html>