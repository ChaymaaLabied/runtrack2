<?php
function leetSpeak($str)
{
    $map = [
        'A' => '4',
        'a' => '4',
        'B' => '8',
        'b' => '8',
        'E' => '3',
        'e' => '3',
        'G' => '6',
        'g' => '6',
        'L' => '1',
        'l' => '1',
        'S' => '5',
        's' => '5',
        'T' => '7',
        't' => '7',
    ];

    // Parcourir chaque caractère et remplacer si présent dans la map
    $result = '';
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if (isset($map[$char])) {
            $result .= $map[$char];
        } else {
            $result .= $char;
        }
    }

    return $result;
}

// Exemple
echo leetSpeak("Hello LaPlateforme!");
