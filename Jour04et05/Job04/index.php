<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire POST simple sans fonctions</title>
</head>

<body>

    <h1>Formulaire POST simple</h1>

    <form action="" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <hr>

    <?php
    if (isset($_POST['prenom']) || isset($_POST['nom']) || isset($_POST['email'])) {
        echo "<h2>Données reçues :</h2>";
        echo "<table border='1' style='border-collapse: collapse; margin-top: 20px;'>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";

        foreach ($_POST as $cle => $valeur) {
            echo "<tr><td>" . $cle . "</td><td>" . $valeur . "</td></tr>";
        }

        echo "</table>";
    }
    ?>

</body>

</html>