<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>

<body>

    <h1>Formulaire de Connexion</h1>

    <form action="" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username"><br><br>

        <label for="password">Mot de passe :</label>
        <input type="text" name="password" id="password"><br><br>

        <input type="submit" value="Se connecter">
    </form>

    <hr>

    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] === "John" && $_POST['password'] === "Rambo") {
            echo "<p><strong>C’est pas ma guerre</strong></p>";
        } else {
            echo "<p><strong>Votre pire cauchemar</strong></p>";
        }
    }
    ?>

</body>

</html>