<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

// Vérifie la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

// Exécute la requête SQL
$result = $mysqli->query('SELECT * FROM etudiants');

// Vérifie si des résultats sont retournés
if ($result && $result->num_rows > 0) {
    echo '<table border="1">';
    echo '<thead><tr>';

    // Affiche les noms des champs
    while ($field = $result->fetch_field()) {
        echo '<th>' . $field->name . '</th>';
    }

    echo '</tr></thead><tbody>';

    // Affiche les données ligne par ligne
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        foreach ($row as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody></table>';
} else {
    echo 'Aucun résultat trouvé.';
}

// Ferme la connexion
$mysqli->close();
