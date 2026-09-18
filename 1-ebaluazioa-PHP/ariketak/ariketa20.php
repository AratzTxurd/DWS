<?php
$notak = array("Jone" => 8, "Ander" => 7,"Mikel" => 9,"Ane" => 8.5
);
$batezBestekoNota = array_sum($notak) / count($notak);
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikasleen notak</title>
</head>
<body>
    <h1>Ikasleen notak</h1>

    <?php
    foreach ($notak as $izena => $nota) {
        echo "<p>$izena: $nota</p>";
    }   
    ?>

    <p><strong>Batez besteko nota:</strong> <?php echo $batezBestekoNota; ?></p>
</body>
</html>