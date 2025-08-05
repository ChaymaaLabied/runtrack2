<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

$sql = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage 
        FROM salles 
        INNER JOIN etage ON salles.id_etage = etage.id";

$result = $mysqli->query($sql);

if ($result && $result->num_rows > 0) {
    echo '<table border="1">';
    echo '<thead><tr>';
    while ($field = $result->fetch_field()) {
        echo '<th>' . $field->name . '</th>';
    }
    echo '</tr></thead><tbody>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        foreach ($row as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
} else {
    echo "Aucun résultat.";
}

$mysqli->close();
