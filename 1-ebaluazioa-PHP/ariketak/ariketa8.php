<?php 
$zenbakia=6;
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
if ($zenbakia >= 0 && $zenbakia <=10){
    echo "Zenbakia ". $zenbakia . " da"; 
}else {
    echo "Zenbakia ez dago 0 eta 10en artean";
}
?>
</body>
</html>