<?php
function occurrences($str, $char)
{
    $count = 0;
    $length = strlen($str);

    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }

    return $count;
}

// Exemple d'utilisation
$str = "Bonjour";
$char = "o";

echo "le nombre de $char dans $str est :" . occurrences($str, $char);  // Affiche : 2
