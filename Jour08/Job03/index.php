<?php
session_start(); // Démarre la session

// Réinitialisation de la liste si bouton Reset cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

// Ajout du prénom à la session
if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $_SESSION['prenoms'][] = $prenom;
}

// Récupération de la liste des prénoms (ou tableau vide)
$prenoms = $_SESSION['prenoms'] ?? [];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste de prénoms</title>
</head>

<body>
    <h1>Ajouter un prénom</h1>

    <!-- Formulaire pour ajouter un prénom -->
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom">
        <button type="submit">Ajouter</button>
    </form>

    <!-- Formulaire pour réinitialiser la liste -->
    <form method="post" style="margin-top:10px;">
        <button type="submit" name="reset">Reset</button>
    </form>

    <!-- Affichage des prénoms -->
    <h2>Liste des prénoms :</h2>
    <ul>
        <?php foreach ($prenoms as $p): ?>
            <li><?php echo htmlspecialchars($p); ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>