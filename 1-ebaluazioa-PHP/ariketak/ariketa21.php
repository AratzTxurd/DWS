<?php
$ikasleak = ["Ane", "Jon", "Mikel", "June", "Unai", "Maialen"];
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
echo "Klasera etorritako ikasle kopurua: " . count($ikasleak) . "<br>";

echo "Ikasleak:<br>";
foreach ($ikasleak as $ikaslea) {
    echo $ikaslea . "<br>";
}

if (in_array("Mikel", $ikasleak)) {
    echo "Mikel klasera etorri da.<br>";
} else {
    echo "Mikel ez da klasera etorri.<br>";
}

if (in_array("Nora", $ikasleak)) {
    echo "Nora klasera etorri da.";
} else {
    echo "Nora ez da klasera etorri.";
}
?>
</body>
</html>