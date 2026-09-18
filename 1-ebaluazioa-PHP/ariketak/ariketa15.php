<?php
$zenbakia = 0;
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
do {
    echo $zenbakia;
    $zenbakia++;
    if ($zenbakia <= 10) {
        echo "-";
    }
} while ($zenbakia <= 10);
?>
</body>
</html>