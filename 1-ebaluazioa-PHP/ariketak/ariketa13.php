<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentua</title>
</head>
<body>
    <?php
    $lehenengoa = true;
    for ($zenbakia = 5; $zenbakia <= 50; $zenbakia++) {
        if ($zenbakia % 2 === 0) {
            if (!$lehenengoa) {
                echo ', ';
            }
            echo $zenbakia;
            $lehenengoa = false;
        }
    }
    ?>
    </body>
</html>