<?php
session_start();

// Réinitialisation si bouton reset cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    // Incrémentation du compteur
    if (isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites']++;
    } else {
        $_SESSION['nbvisites'] = 1;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>

<body>
    <h1>Vous avez visité cette page <?= $_SESSION['nbvisites'] ?> fois.</h1>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>

</html>