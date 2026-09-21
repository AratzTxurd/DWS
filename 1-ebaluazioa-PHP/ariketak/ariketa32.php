<?php
function ikasleaSortu($erregistro, $izena, $adina, $kalifikazioa) {
    $erregistro[$izena] = [ "adina" => $adina, "kalifikazioa" => $kalifikazioa];
    return $erregistro;
}

function ikasleaErakutsi($erregistro, $izena) {
    if (isset($erregistro[$izena])) {
        echo "Izena: {$izena}<br>";
        echo "Adina: {$erregistro[$izena]['adina']}<br>";
        echo "Kalifikazioa: {$erregistro[$izena]['kalifikazioa']}<br>";
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
    $erregistro = [];

    $erregistro = ikasleaSortu($erregistro, 'Ane', 16, 8.5);
    $erregistro = ikasleaSortu($erregistro, 'Jon', 17, 9.2);
    $erregistro = ikasleaSortu($erregistro, 'Marta', 15, 7.8);

    echo "<h3>Erregistroa</h3>";
    echo "<pre>";
    print_r($erregistro);
    echo "</pre>";

    echo "<h3>Ikasle baten informazioa</h3>";
    ikasleaErakutsi($erregistro, 'Jon');

    echo "<h3>Erregistroan ez dauden ikasleak</h3>";
    ikasleaErakutsi($erregistro, 'Iker');
    ?>
</body>
</html>
