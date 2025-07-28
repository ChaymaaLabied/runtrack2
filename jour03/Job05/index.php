<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    'voyelles' => 0,
    'consonnes' => 0
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$longueur = 0;
while (isset($str[$longueur])) {
    $longueur++;
}

for ($i = 0; $i < $longueur; $i++) {
    $caractere = $str[$i];

    if (
        ($caractere >= 'A' && $caractere <= 'Z') ||
        ($caractere >= 'a' && $caractere <= 'z')
    ) {
        $estVoyelle = false;

        foreach ($voyelles as $voyelle) {
            if ($caractere === $voyelle) {
                $estVoyelle = true;
                break;
            }
        }

        if ($estVoyelle) {
            $dic['voyelles']++;
        } else {
            $dic['consonnes']++;
        }
    }
}

?>

<!-- Affichage HTML du tableau -->
<table border="1">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $dic['voyelles'] ?></td>
            <td><?= $dic['consonnes'] ?></td>
        </tr>
    </tbody>
</table>