<?php
$desio_zerrenda = array('Kanada', 'Australia', 'Italia', 'Norvegia', 'Japon');

array_push($desio_zerrenda, 'Brasil', 'Grezia');

$bisitatuak_2022 = array('Italia', 'Frantzia');
$bisitatuak_2023 = array('Portugal', 'Japon');
$bisitatuak_guztiak = array_merge($bisitatuak_2022, $bisitatuak_2023);

$desio_zerrenda = array_diff($desio_zerrenda, $bisitatuak_guztiak);
sort($desio_zerrenda);
?>
<!DOCTYPE html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bidaia-desioen zerrenda</title>
</head>
<body>
	<h1>Bidaia-desioen zerrenda</h1>
	<ul>
		<?php foreach ($desio_zerrenda as $herrialdea): ?>
			<li><?= htmlspecialchars($herrialdea, ENT_QUOTES, 'UTF-8') ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>
