<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Maison ASCII</title>
</head>

<body>

    <h1>Dessiner une maison</h1>

    <form method="get">
        <label for="largeur">Largeur :</label>
        <input type="text" name="largeur" id="largeur"><br><br>

        <label for="hauteur">Hauteur :</label>
        <input type="text" name="hauteur" id="hauteur"><br><br>

        <input type="submit" value="Afficher la maison">
    </form>

    <pre>
<?php
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = (int)$_GET['largeur'];
    $hauteur = (int)$_GET['hauteur'];

    if ($largeur >= 4 && $hauteur >= 2) {

        // TOIT 
        $milieu = floor($largeur / 2);
        for ($i = 0; $i < $milieu; $i++) {
            $espaces = str_repeat(" ", $milieu - $i - 1);
            $contenu = str_repeat(" ", 2 * $i);
            echo $espaces . "/" . $contenu . "\\" . "\n";
        }

        // Haut du rectangle
        echo str_repeat("-", $largeur) . "\n";

        // Murs
        for ($i = 0; $i < $hauteur - 2; $i++) {
            echo "|" . str_repeat(" ", $largeur - 2) . "|\n";
        }

        // Bas du rectangle
        echo str_repeat("-", $largeur) . "\n";
    } else {
        echo "Veuillez entrer une largeur ≥ 4 et une hauteur ≥ 2.";
    }
}
?>
</pre>

</body>

</html>