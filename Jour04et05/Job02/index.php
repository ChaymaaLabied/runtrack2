<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire GET avec tableau</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px 12px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h1>Formulaire GET</h1>

    <form action="" method="get">
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

    if (isset($_GET['prenom']) || isset($_GET['nom']) || isset($_GET['email'])) {
        echo "<h2>Résultat :</h2>";
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";

        foreach ($_GET as $cle => $valeur) {
            echo "<tr>";
            echo "<td>" . $cle . "</td>";
            echo "<td>" . $valeur . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>

</html>