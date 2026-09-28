<?php
$kolorea = $_POST["kolorea"];
?>
<!DOCTYPE html>
<html lang="eu">
<body style="background-color: <?php echo $kolorea; ?>;">
    <?php 
    if(!empty($kolorea)){
    echo "Aukeratutako kolorea ". $kolorea." izan da.";
    }else{
        echo "Ez da kolorea aukeratu.";
    }
    ?>
</body>
</html>