<?php
$hauteur = 5;

echo "<pre>";

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo " ";
    }
    echo "/";
    if ($i == $hauteur) {
        for ($k = 1; $k <= 2 * ($i - 1); $k++) {
            echo "-";
        }
    } else {
        for ($k = 1; $k <= 2 * ($i - 1); $k++) {
            echo " ";
        }
    }
    echo "\\";
    echo "\n";
}

echo "</pre>";
