<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>

<body>

    <h1>Formulaire GET</h1>

    <form action="" method="get">
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

    if (isset($_GET['nom']) || isset($_GET['age']) || isset($_GET['ville'])) {

        $compteur = 0;

        foreach ($_GET as $cle => $valeur) {

            $compteur += 1;
        }

        echo "<p>Le nombre d'arguments GET envoyés est : <strong>" . $compteur . "</strong></p>";
        echo "<ul>";

        foreach ($_GET as $cle => $valeur) {
            echo "<li><strong>" . $cle . "</strong> : " . $valeur . "</li>";
        }

        echo "</ul>";
    }
    ?>

</body>

</html>