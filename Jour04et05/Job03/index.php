<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>

<body>

    <h1>Formulaire POST</h1>

    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="age">Âge :</label>
        <input type="text" name="age" id="age"><br><br>

        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <hr>

    <?php

    if (isset($_POST['nom']) || isset($_POST['age']) || isset($_POST['ville'])) {

        $compteur = 0;

        foreach ($_POST as $cle => $valeur) {

            $compteur += 1;
        }

        echo "<p>Le nombre d'arguments POST envoyés est : <strong>" . $compteur . "</strong></p>";
        echo "<ul>";

        foreach ($_POST as $cle => $valeur) {
            echo "<li><strong>" . $cle . "</strong> : " . $valeur . "</li>";
        }

        echo "</ul>";
    }
    ?>

</body>

</html>