<?php
$largeur = 20;
$hauteur = 10;

echo "<pre>";

// Ligne du haut
for ($i = 1; $i <= $largeur; $i++) {
    echo "-";
}
echo "\n";

// Lignes du milieu
for ($j = 1; $j <= $hauteur; $j++) {
    for ($i = 1; $i <= $largeur; $i++) {
        if ($i == 1 || $i == $largeur) {
            echo "|";
        } else {
            echo " ";
        }
    }
    echo "\n";
}

// Ligne du bas
for ($i = 1; $i <= $largeur; $i++) {
    echo "-";
}
echo "</pre>";
