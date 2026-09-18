<?php 
$zenbakia=5;
?>
<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($biderkatzailea = 1; $biderkatzailea <= 10; $biderkatzailea++) {
    $emaitza = $zenbakia * $biderkatzailea;
    echo "$zenbakia x $biderkatzailea = $emaitza<br>";
}
?>
</body>
</html>