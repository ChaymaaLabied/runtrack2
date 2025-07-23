<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i !== 42) { // Si $i est différent de 42 (valeur ET type)
        echo "$i<br />"; // Affiche normalement
    } else {
        echo "<b><u>$i</u></b><br />"; // Si c’est 42, affiche en gras et souligné
    }
}
