<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

$longueur = 0;
while (isset($str[$longueur])) {
    $longueur++;
}

for ($i = 0; $i < $longueur; $i++) {

    foreach ($voyelles as $voyelle) {
        if ($str[$i] === $voyelle) {
            echo $str[$i];
        }
    }
}
