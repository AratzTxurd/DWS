<?php
$series = [];
include 'datuak.php';
$bidalita = isset($_POST['izenburua']);
$izenburua = $_POST['izenburua'] ?? '';
$aurkitutakoak = [];

foreach ($series as $serie) {
    if ($serie['izenburua'] == $izenburua) {
        $aurkitutakoak[] = $serie;
    }
}
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
            <h1>Serieak Bilatu</h1>

        <form action="Bilatu.php" method="post">

        <label for="izenburua">Seriearen Izenburua:</label>
        <input type="text" name="izenburua" id="izenburua">
        <input type="submit" value="Bilatu">
        </form>

    <?php if ($aurkitutakoak) { ?>
        <section class="serieak">
            <?php foreach ($aurkitutakoak as $serie) { ?>
                <article class="seriea">
                    <img src="<?php echo $serie['irudia']; ?>" alt="<?php echo $serie['izenburua']; ?>">
                    <div>
                        <h2><?php echo $serie['izenburua']; ?></h2>
                        <p>Generoa: <?php echo $serie['generoa']; ?></p>
                        <p>Denboraldiak: <?php echo $serie['denboraldiak']; ?></p>
                        <p>Balorazioa: <?php echo $serie['balorazioa']; ?></p>
                        <p><?php echo $serie['amaituta'] ? 'Amaituta' : 'Martxan'; ?></p>
                    </div>
                </article>
            <?php } ?>
        </section>
    <?php } elseif ($bidalita) { ?>
        <p>Ez da aurkitu</p>
    <?php } ?>
     </main>

    <?php include 'edukiera/footer.html'; ?>
    

</body>
</html>