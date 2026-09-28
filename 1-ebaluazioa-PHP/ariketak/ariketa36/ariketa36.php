<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 36</title>
</head>
<body>
    <table border="1">
        <caption>Lehenengo 4 elementuen berreketak</caption>
        <thead>
            <tr>
                <th>Oinarria \ Berretzailea</th>
                <?php
                for ($berretzailea = 1; $berretzailea <= 4; $berretzailea++) {
                    echo "<th>$berretzailea</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($oinarria = 1; $oinarria <= 4; $oinarria++) {
            ?>
                <tr>
                    <th><?php echo $oinarria; ?></th>
                    <?php
                    for ($berretzailea = 1; $berretzailea <= 4; $berretzailea++) {
                        echo "<td>" . pow($oinarria, $berretzailea) . "</td>";
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>