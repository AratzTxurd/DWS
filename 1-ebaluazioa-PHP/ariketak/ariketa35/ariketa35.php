<?php
$zenbakia = rand(0, 5);

function biderketaTaulaErakutsi($zenbakia)
{
    echo '<table border="1">';
    echo '<thead><tr><th>Biderketa</th><th>Emaitza</th></tr></thead>';
    echo '<tbody>';

    for ($biderkagaia = 1; $biderkagaia <= 10; $biderkagaia++) {
        echo '<tr>';
        echo '<td>' . $zenbakia . ' x ' . $biderkagaia . '</td>';
        echo '<td>' . ($zenbakia * $biderkagaia) . '</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
}

function irudiakErakutsi()
{
    $irudiak = [ ];

    echo '<table border="1"><tr>';

    foreach ($irudiak as $irudia) {
        echo '<td><img src="' . $irudia . '" alt="Ausazko irudia"></td>';
    }

    echo '</tr></table>';
}

?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa35</title>
</head>
<body>
    <?php 
    include 'header.php';
    ?>

    <main>
        <h2>Ariketa 35</h2>
        <?php
        switch ($zenbakia) {
    case 0:
        $besteZenbakia = rand(1, 5);
        echo '<p>Ez du sarbiderik.</p>';
        echo '<p>Beste zenbakia: ' . $besteZenbakia . '</p>';
        break;
    case 1:
        echo '<p>Ongi etorri, egun on bat pasa!</p>';
        break;
    case 2:
        $taulakoZenbakia = rand(1, 10);
        echo '<h3>' . $taulakoZenbakia . ' zenbakiaren biderketa-taula</h3>';
        biderketaTaulaErakutsi($taulakoZenbakia);
        break;
    case 3:
        echo '<h3>Lau irudi</h3>';
        irudiakErakutsi();
        break;
    default:
        echo '<p>Zenbakia ez dago 0 eta 3 artean.</p>';
        }
        ?>
    </main>

    <?php include 'footer.php'; ?>
    ?>
</body>
</html>