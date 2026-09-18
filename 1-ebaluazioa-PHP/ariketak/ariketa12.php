<?php
$zutabeKopurua = 4;
$errenkadaKopurua = 3;
?>
<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taula</title>
    <style>
        table {
            border: 2px solid #777;
            border-collapse: separate;
            border-spacing: 5px;
        }

        th,
        td {
            border: 2px solid #999;
        }
    </style>
</head>
<body>
    <h1>Taula</h1>
    <table>
        <tr>
            <th></th>
            <?php for ($zutabea = 1; $zutabea <= $zutabeKopurua; $zutabea++) { ?>
                <th><?php echo $zutabea; ?></th>
            <?php } ?>
        </tr>

        <?php for ($errenkada = 1; $errenkada <= $errenkadaKopurua; $errenkada++) { ?>
            <tr>
                <th><?php echo $errenkada; ?></th>
                <?php for ($zutabea = 1; $zutabea <= $zutabeKopurua; $zutabea++) { ?>
                    <td><?php echo $errenkada . '-' . $zutabea; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>