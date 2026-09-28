<?php

function seriekopurutotala(&$series){
    return count($series);
};

function martxandaudenserieak(&$series){
    $kopurua = 0;
    foreach ($series as $serie) {
        if ($serie['amaituta'] === false) {
            $kopurua++;
        }
    }
    return $kopurua;
};

function batazbestekobalorazioa(&$series){
    $balorazioak = array_column($series, 'balorazioa');
    return array_sum($balorazioak) / count($balorazioak);
};

function baloraziorikaltuena(&$series){
    return max(array_column($series, 'balorazioa'));
};
?>