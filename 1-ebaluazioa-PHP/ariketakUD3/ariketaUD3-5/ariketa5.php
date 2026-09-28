<?php
$aukerak = $_POST["aukerak"] ?? [];
?>
<!DOCTYPE html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
	<title>Aukerak</title>
</head>
<body>
	<h1>Aukeratu aukerak:</h1>

	<form method="post">
		<input type="checkbox" name="aukerak[]" value="Musika"> Musika<br>
		<input type="checkbox" name="aukerak[]" value="Kirola"> Kirola<br>
		<input type="checkbox" name="aukerak[]" value="Zinema"> Zinema<br>
		<input type="checkbox" name="aukerak[]" value="Irakurtzea"> Irakurtzea<br>
		<input type="checkbox" name="aukerak[]" value="Bidaiatzea"> Bidaiatzea<br><br>
		<input type="submit" value="Bidali">
	</form>

	<?php if (count($aukerak) > 0) { ?>
		<h2>Aukeratutakoak:</h2>
		<ul>
			<?php foreach ($aukerak as $aukera) { ?>
				<li><?php echo $aukera; ?></li>
			<?php } ?>
		</ul>
	<?php } else{?>
    <h2>Ez da ezer aukeratu</h2>
    <?php }?>

</body>
</html>
