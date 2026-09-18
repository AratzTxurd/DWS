<?php
$notak = array("Jone" => array(
    "Abizenak"=> "Martinez Lopez",
    "Adina" => 20,
    "Zikloa"=>"AS3"), 
                "Ander" => array(
    "Abizenak"=> "Urrutia Ron",
    "Adina" => 19,
    "Zikloa"=>"DW3"), 
                "Mikel" => array(
    "Abizenak"=> "Olarreta Andion",
    "Adina" => 20   ,
    "Zikloa"=>"DW3"));
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
    echo "IKASLEAK: ";
    foreach($notak as $ikaslea => $datuak) {
        echo "<p>Ikaslea: " . $ikaslea . "</p>";
        echo "<ul>";
        foreach($datuak as $gakoa => $balioa) {
            echo "<li>" . $gakoa . ": " . $balioa . "</li>";
        }
        echo "</ul>";
    }
?>
</body>
</html>