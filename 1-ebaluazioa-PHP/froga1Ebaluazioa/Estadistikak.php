<?php
include 'datuak.php';
include 'funtzioak/funztioak.php';
?>
<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tx_Series</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php include 'edukiera/header.html'; ?>

    <main>
        <h1>Estadistikak</h1>

        <p>Serie Kopurua</p>
        <p><?php echo seriekopurutotala($series); ?></p>
        <p>Martxan dauden serieak</p>
        <p><?php echo martxandaudenserieak($series);?></p>
        <p>Batez besteko balorazioa</p>
        <p><?php echo batazbestekobalorazioa($series);?></p>
        <p>Baloraziorik altuena</p>
        <p><?php echo baloraziorikaltuena($series);?></p>

     </main>

    <?php include 'edukiera/footer.html'; ?>

</body>
</html>