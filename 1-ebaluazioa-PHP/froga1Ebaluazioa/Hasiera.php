<?php
$series = [];
include 'datuak.php';
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

        <h1>Tx_Series</h1>

        <section class="serieak">
        <?php foreach ($series as $serie) { ?>
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

    </main>

    <?php include 'edukiera/footer.html'; ?>

</body>
</html>