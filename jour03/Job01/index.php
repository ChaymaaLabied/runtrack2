<?php

// Déclaration du tableau
$tab = [200, 204, 173, 98, 171, 404, 459];

// Parcours avec foreach
foreach ($tab as $nombre) {
    if ($nombre % 2 === 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }
}
