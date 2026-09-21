<?php
$aukerak = [ 0 => 'Harri', 1 => 'Horri', 2 => 'Ar'];

function irabazleaAukeratu($jokalariarenAukera, $makinarenAukera) {
    if ($jokalariarenAukera === $makinarenAukera) {
        return 'berdinketa';
    }

    $jokalariakIrabaztekoKonbinazioak = [ 0 => 2, 1 => 0, 2 => 1];

    if ($jokalariakIrabaztekoKonbinazioak[$jokalariarenAukera] === $makinarenAukera) {
        return 'jokalaria';
    } else {
        return 'makina';
    }
}

$aratzenPuntuak = 0;
$makinarenPuntuak = 0;
$txandak = [];

while ($aratzenPuntuak < 3 && $makinarenPuntuak < 3) {
    $aratzenAukera = rand(0, 2);
    $makinarenAukera = rand(0, 2);
    $irabazlea = irabazleaAukeratu($aratzenAukera, $makinarenAukera);

    if ($irabazlea === 'jokalaria') {
        $aratzenPuntuak++;
    } elseif ($irabazlea === 'makina') {
        $makinarenPuntuak++;
    }

    $txandak[] = [
        'jokalaria' => $aukerak[$aratzenAukera],
        'makina' => $aukerak[$makinarenAukera],
        'irabazlea' => $irabazlea,
        'jokalariarenPuntuak' => $aratzenPuntuak,
        'makinarenPuntuak' => $makinarenPuntuak
    ];
}

if ($aratzenPuntuak === 3) {
    $jokoarenIrabazlea = 'Jokalaria';
} else {
    $jokoarenIrabazlea = 'Makina';
}
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harri, Horri, Ar</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h2>Jokoaren emaitza</h2>
        <p><strong>Irabazlea: <?= $jokoarenIrabazlea ?></strong></p>
        <p>Azken markagailua: Aratz <?= $aratzenPuntuak ?> - <?= $makinarenPuntuak ?> Makina</p>

        <?php foreach ($txandak as $zenbakia => $txanda): ?>
            <p>
                <?= $zenbakia + 1 ?>. txanda:<br>
                Aratz: <?= $txanda['jokalaria'] ?><br>
                Makina: <?= $txanda['makina'] ?><br>
                Irabazlea: <?= ucfirst($txanda['irabazlea']) ?><br>
                Markagailua: <?= $txanda['jokalariarenPuntuak'] ?> - <?= $txanda['makinarenPuntuak'] ?>
            </p>
        <?php endforeach; ?>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>