<?php
$series = [];
include 'datuak.php';

$izenburua= $_POST['izenburua'];
$generoa= $_POST['generoa'];
$denboraldi= $_POST['denboraldi'];
$balorazioa= $_POST['balorazioa'];
$egoera= $_POST['egoera'];
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

        <h1>Serie berria gehitu</h1>

        <section class="serieak">
     <form action="Serieagehitu.php" method="post">

        <label for="izenburua">Izenburua:</label>
        <input type="text" name="izenburua" id="izenburua">

        <label for="generoa">Generoa:</label>
        <select name="generoa[]" id="generoa">
            <option value="Guztiak"  selected>Guztiak </option>
            <option value="Zientzia fikzioa">Zientzia fikzioa </option>  
            <option value="Drama">Drama </option>
            <option value="Fantasia">Fantasia </option>
            <option value="Thriller">Thriller </option>
        </select>

        <label for="denboraldi">Denboraldi kopurua:</label>
        <input type="text" name="denboraldi" id="denboraldi">

        <label for="balorazioa">Balorazioa:</label>
        <input type="text" name="balorazioa" id="balorazioa">

        <label for="egoera">Egoera:</label>
        <select name="egoera" id="egoera">
        <option value="Martxan" selected>Martxan </option>

         <option value="Amaituta">Amaituta </option>
        </select>

        <input type="submit" value="Bilatu">
        </form>

        </section>

    </main>

    <?php include 'edukiera/footer.html'; ?>

</body>
</html>