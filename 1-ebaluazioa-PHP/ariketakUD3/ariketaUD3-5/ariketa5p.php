<?php
$bidalia = isset($_POST["bidali"]);

if ($bidalia) {
  $izena = $_POST["izena"];
  $abizenak = $_POST["abizenak"];
  $adina = $_POST["adina"] ?? "";
  $garraiobideak = $_POST["garraiobideak"] ?? [];
  $altaData = $_POST["alta_data"];
}
?>
<!DOCTYPE html>
<html lang="eu">
<body>
<h1>IKASLEEN DATUAK</h1>

<?php if (!$bidalia || empty($izena) || empty($abizenak)) { ?>
  <?php if ($bidalia) { ?>
    <p>Izena eta abizenak bete behar dituzu.</p>
  <?php } ?>

  <form method="post">
    <label for="izena">Izena:</label>
    <input type="text" id="izena" name="izena" value="<?php echo htmlspecialchars($izena); ?>"><br><br>

    <label for="abizenak">Abizenak:</label>
    <input type="text" id="abizenak" name="abizenak" value="<?php echo htmlspecialchars($abizenak); ?>"><br><br>

    <p>Adina:</p>
    <input type="radio" id="adina1" name="adina" value="15">
    <label for="adina1">0 - 15</label><br>
    <input type="radio" id="adina2" name="adina" value="60">
    <label for="adina2">15 - 60</label><br>
    <input type="radio" id="adina3" name="adina" value="100">
    <label for="adina3">60 - 100</label><br><br>

    <p>Zelan zatoz ikastetxera?</p>
    <input type="checkbox" name="garraiobideak[]" value="Bizikletaz"> Bizikletaz<br>
    <input type="checkbox" name="garraiobideak[]" value="Kotxez"> Kotxez<br>
    <input type="checkbox" name="garraiobideak[]" value="Autobusez"> Autobusez<br><br>

    <label for="alta_data">Alta data:</label>
    <input type="date" id="alta_data" name="alta_data"><br><br>
    <input type="submit" name="bidali" value="Bidali">
  </form>
<?php } else { ?>
  <p>Kaixo, <?php echo htmlspecialchars($izena . " " . $abizenak); ?>.</p>
  <?php if ($adina === "15") { ?>
    <p>15 urte edo gutxiago dituzu.</p>
  <?php } elseif ($adina === "60") { ?>
    <p>15 eta 60 urte artean dituzu.</p>
  <?php } else { ?>
    <p>60 urte baino gehiago dituzu.</p>
  <?php } ?>
  <p>Garraiobideak:</p>
  <ul>
    <?php foreach ($garraiobideak as $garraiobidea) { ?>
      <li><?php echo htmlspecialchars($garraiobidea); ?></li>
    <?php } ?>
  </ul>
  <p>Alta data: <?php echo htmlspecialchars($altaData); ?></p>
<?php } ?>
</body>
</html>
