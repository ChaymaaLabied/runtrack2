<?php
// Traitement déconnexion
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprime le cookie
    $prenom = null;
}

// Traitement connexion
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    setcookie('prenom', $prenom, time() + 3600); // Cookie valable 1h
}

// Vérifie si le cookie existe déjà
$prenom = $_COOKIE['prenom'] ?? $prenom ?? null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion avec cookie</title>
</head>

<body>

    <?php if (!$prenom): ?>
        <!-- Formulaire de connexion -->
        <h2>Connexion</h2>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom">
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php else: ?>
        <!-- Message si connecté -->
        <h2>Bonjour <?php echo htmlspecialchars($prenom); ?> !</h2>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php endif; ?>

</body>

</html>