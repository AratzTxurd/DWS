<?php
$Pokemonak = [
    "Pikachu" => [
        "Mota" => "Elektrikoa",
        "Maila" => 25,
        "Eboluzionatuta" => false,
    ],
];

function pokemonGehitu($izena, $mota, $maila, $eboluzionatuta) {
    global $Pokemonak;

    $Pokemonak[$izena] = [
        "Mota" => $mota,
        "Maila" => $maila,
        "Eboluzionatuta" => (bool) $eboluzionatuta,
    ];
}

function pokemonErakutsi($eboluzionatuta){
    global $Pokemonak;

    if($eboluzionatuta){
        $eboluzionat = "Eboluzionatuta";
    }else{
    $eboluzionat= "Eboluzionatu gabe";
    }

    echo "<h2>" .$eboluzionat. "</h2>";
    echo "<ul>";

    foreach($Pokemonak as $izena => $pokemon){
        if($pokemon["Eboluzionatuta"] === $eboluzionatuta){
            echo "<li>" . $izena . " - Mota: " . $pokemon["Mota"] . ", Maila: " . $pokemon["Maila"] . "</li>";
        }
    }

    echo "</ul>";

}



pokemonGehitu("Bulbasaur", "Belarra", 18, false);
pokemonGehitu("Charmander", "Sua", 22, false);
pokemonGehitu("Venusaur", "Belarra/Pozoia", 38, true);
pokemonGehitu("Charizard", "Sua/Hegaldaria", 42, true);
pokemonGehitu("Snorlax", "Normala", 40, true);
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    <?php
    $mostrarEboluzionatuta = false;
    pokemonErakutsi($mostrarEboluzionatuta);
    
    ?>
</body>
</html>