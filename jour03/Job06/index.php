<?php
$str = "Les choses que l'on possede finissent par nous posseder";
$words = [];
$word = '';
$j = 0;
$longueurStr = 0;

// 1. Calculer la longueur de la chaîne
while (isset($str[$longueurStr])) {
    $longueurStr++;
}

// 2. Découper la phrase en mots (manuellement)
for ($i = 0; $i < $longueurStr; $i++) {
    if ($str[$i] != ' ') {
        $word .= $str[$i];
    } else {
        $words[$j] = $word;
        $j++;
        $word = '';
    }
}
// Ajouter le dernier mot
if ($word != '') {
    $words[$j] = $word;
}

// 3. Longueur du tableau
$longueurWords = 0;
while (isset($words[$longueurWords])) {
    $longueurWords++;
}

// 4. Inverser l'ordre des mots
for ($k = 0; $k < $longueurWords / 2; $k++) {
    $temp = $words[$k];
    $words[$k] = $words[$longueurWords - 1 - $k];
    $words[$longueurWords - 1 - $k] = $temp;
}

// 5. Inverser les lettres de chaque mot
for ($i = 0; $i < $longueurWords; $i++) {
    $mot = $words[$i];
    $motInverse = '';
    $len = 0; // longueur d'un mot dans le tableau des words

    // Calculer la longueur du mot
    while (isset($mot[$len])) {
        $len++;
    }

    // Reconstituer le mot à l'envers en concaténant les lettres à l'envers
    for ($m = $len - 1; $m >= 0; $m--) {
        $motInverse .= $mot[$m];
    }

    // Remplacer l'ancien mot par le mot inversé
    $words[$i] = $motInverse;
}

// 6. Afficher la chaîne finale
for ($i = 0; isset($words[$i]); $i++) {
    echo $words[$i] . " ";
}
