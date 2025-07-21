<?php
$boolean = true;
$entier = 42;
$chaine = "LaPlateforme";
$flottant = 3.14;

echo "<table border='1'>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";

echo "<tr><td>boolean</td><td>boolean</td><td>" . ($boolean ? "true" : "false") . "</td></tr>";
echo "<tr><td>integer</td><td>entier</td><td>$entier</td></tr>";
echo "<tr><td>string</td><td>chaine</td><td>$chaine</td></tr>";
echo "<tr><td>float</td><td>flottant</td><td>$flottant</td></tr>";

echo "</tbody></table>";
?>
