<?php
$filmak = array("The Shawshank Redemption",  "Inception", "Pulp Fiction", "The Dark Knight", "Forrest Gump", "The Matrix", "Schindler's List", "Interstellar", "Gladiator","The Godfather");
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikasleen presentzia</title>
</head>
<body>
<?php
print_r($filmak); 
echo "<br>";

sort($filmak);
print_r($filmak);
?>
</body>
</html>