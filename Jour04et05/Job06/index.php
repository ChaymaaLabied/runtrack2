<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Vérification de nombre pair/impair</title>
</head>

<body>

    <h1>Nombre pair ou impair</h1>

    <form action="" method="get">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Vérifier">
    </form>

    <hr>

    <?php
    if (isset($_GET['nombre'])) {
        $n = $_GET['nombre'];

        if ($n % 2 == 0) {
            echo "<p><strong>Nombre pair</strong></p>";
        } else {
            echo "<p><strong>Nombre impair</strong></p>";
        }
    }
    ?>

</body>

</html>