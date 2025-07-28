<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


$longueur = 0;
while (isset($str[$longueur])) {
    $longueur++;
}

for ($i = 0; $i < $longueur; $i++) {
    if ($i % 2 == 0) {
        echo $str[$i];
    }
}
