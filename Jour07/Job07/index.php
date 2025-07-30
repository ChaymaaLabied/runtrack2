<?php
function gras($str)
{
    $mots = explode(" ", $str); //tableau de chaine de caractère 
    foreach ($mots as &$mot) {
        if (ctype_upper(substr($mot, 0, 1))) {
            $mot = "<b>$mot</b>";
        }
    }
    return implode(" ", $mots); // on recupère la chaine de caratère maintenant
}

function cesar($str, $decalage = 2)
{
    $resultat = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $car = $str[$i];
        if (ctype_alpha($car)) { // si str[i] est bien une lettre 
            $ascii = ord($car); // alors j'obtiens son code ascii
            $base = ctype_upper($car) ? ord('A') : ord('a'); // si il est une lettre maj alors on commence par le code ascci de A sinon a
            $resultat .= chr(($ascii - $base + $decalage) % 26 + $base); // %28 pour ne pas sortir des alphabet 
        } else {
            $resultat .= $car;
        }
    }
    return $resultat;
}

function plateforme($str)
{
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === "me") {
            $mot .= "_";
        }
    }
    return implode(" ", $mots);
}
?>

<form method="POST">
    <label for="str">Texte :</label>
    <input type="text" name="str" id="str" required>

    <label for="fonction">Choisissez une fonction :</label>
    <select name="fonction" id="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>

    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    if ($fonction === "gras") {
        echo gras($str);
    } elseif ($fonction === "cesar") {
        echo cesar($str); // décalage par défaut = 2
    } elseif ($fonction === "plateforme") {
        echo plateforme($str);
    } else {
        echo "Fonction inconnue.";
    }
}
?>