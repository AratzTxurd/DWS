<?php
$notak = array("Ander" => "3.5", "Bego" => "7", "Jon" => "6.3");
?>
<!DOCTYPE html> 
    <html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikasleen notak</title>
</head>
<body>
<?php
echo "Anderren nota: " . $notak["Ander"] . "<br>";
echo "Begoren nota: " . $notak["Bego"] . "<br>";
echo "Jonen nota: " . $notak["Jon"] . "<br><br>";

foreach ($notak as $ikaslea => $nota) {
    echo $ikaslea . ": " . $nota . "<br>";
}
?>
</body>
</html>