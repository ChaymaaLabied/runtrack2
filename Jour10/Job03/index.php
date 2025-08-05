<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");

if ($result && $result->num_rows > 0) {
    echo '<table border="1">';
    echo '<thead><tr>';
    while ($field = $result->fetch_field()) {
        echo '<th>' . $field->name . '</th>';
    }
    echo '</tr></thead><tbody>';
    while ($rows = $result->fetch_assoc()) {
        echo '<tr>';
        foreach ($rows as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
} else {
    echo "aucun resultat n'est retourné";
}

$mysqli->close();
