<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire avec styles dynamiques</title>

    <?php
    // Valeurs possibles pour éviter l'inclusion de fichier non désiré
    $styles_valides = ['style1', 'style2', 'style3'];

    // Choix par défaut
    $style_choisi = 'style1';

    if (isset($_GET['style']) && in_array($_GET['style'], $styles_valides)) {
        $style_choisi = $_GET['style'];
    }

    // Inclure la feuille de style choisie
    echo '<link rel="stylesheet" href="' . htmlspecialchars($style_choisi) . '.css">';
    ?>
</head>

<body>

    <h1>Choisissez un style pour le formulaire</h1>

    <form action="" method="get">
        <label for="style">Style :</label>
        <select name="style" id="style">
            <option value="style1" <?php if ($style_choisi === 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($style_choisi === 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($style_choisi === 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <input type="submit" value="Appliquer">
    </form>

</body>

</html>