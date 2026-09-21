<?php
function ikasleaSortu($ikasleak, $izena, $adina, $kalifikazioak) {
    $ikasleak[$izena] = [ "adina" => $adina, "kalifikazioak" => $kalifikazioak];
    return $ikasleak;
}

function batazbestekoa($ikaslearenErregistroa) {
    return array_sum($ikaslearenErregistroa['kalifikazioak']) / count($ikaslearenErregistroa['kalifikazioak']);
}

function ikasleaErakutsi($ikasleak, $izena) {
    if (isset($ikasleak[$izena])) {
        echo "Izena: {$izena}<br>";
        echo "Adina: {$ikasleak[$izena]['adina']}<br>";
        echo "Kalifikazioak: " . implode(", ", $ikasleak[$izena]['kalifikazioak']) . "<br>";
        echo "Batez bestekoa: " . batazbestekoa($ikasleak[$izena]) . "<br>";
    } else {
        echo "Ikaslea ez dago erregistroan.<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikasleen erregistroa</title>
</head>
<body>
    <h2>Ikasleen erregistroa</h2>
    <?php
    $ikasleak = [];

    $ikasleak = ikasleaSortu($ikasleak, 'Ane', 16, ["Matematicas" => 8.5, "Fisica" => 7.0, "Quimica" => 9.0, "Biologia" => 8.0, "Historia" => 8.5, "Geografia" => 9.5]);
    $ikasleak = ikasleaSortu($ikasleak, 'Jon', 17, ["Matematicas" => 9.2, "Fisica" => 8.5, "Quimica" => 9.0, "Biologia" => 9.5, "Historia" => 8.8, "Geografia" => 9.0]);
    $ikasleak = ikasleaSortu($ikasleak, 'Marta', 15, ["Matematicas" => 7.8, "Fisica" => 8.0, "Quimica" => 7.5, "Biologia" => 8.5, "Historia" => 7.0, "Geografia" => 8.0]);

    echo "<h3>Erregistroa</h3>";
    echo "<pre>";
    print_r($ikasleak);
    echo "</pre>";

    echo "<h3>Ikasle baten informazioa</h3>";
    ikasleaErakutsi($ikasleak, 'Jon');

    echo "<h3>Erregistroan ez dauden ikasleak</h3>";
    ikasleaErakutsi($ikasleak, 'Iker');
    ?>
</body>
</html>
