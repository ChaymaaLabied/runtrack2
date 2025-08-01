<?php
// Si le bouton "Reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialise le compteur à 0 
    setcookie('nbvisites', 0, [
        'expires' => time() + 3600,
        'secure' => true,
    ]);
    $nbvisites = 0; // j'ai ajouté cette ligne car le cookie ne va etre mis à jour ur le champs 
} else {
    // Si le cookie existe, on l'incrémente ; sinon on commence à 1
    $nbvisites = isset($_COOKIE['nbvisites']) ? $_COOKIE['nbvisites'] + 1 : 1;
    // Met à jour le cookie avec la nouvelle valeur
    setcookie('nbvisites', $nbvisites, [
        'expires' => time() + 3600,
        'secure' => true,
    ]);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Compteur</title>
</head>

<body>
    <!-- Affiche le nombre de visites -->
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>

    <!-- Formulaire avec bouton pour réinitialiser -->
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>

</html>