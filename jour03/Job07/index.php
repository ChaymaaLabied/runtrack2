<?php
// 1. Initialisation
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = '';
$length = 0;

// 2. Calculer la longueur de la chaîne
while (isset($str[$length])) {
    $length++;
}

// 3. Construire la nouvelle chaîne
for ($i = 0; $i < $length - 1; $i++) {
    $newStr .= $str[$i + 1]; // chaque caractère devient le suivant
}

// 4. Ajouter le premier caractère à la fin
$newStr .= $str[0];

// 5. Affichage
echo $newStr;
