<?php
function calcule($a, $operation, $b)
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro";
            }
            return $a / $b;
        case '%':
            if ($b == 0) {
                return "Erreur : modulo par zéro";
            }
            return $a % $b;
        default:
            return "Opération non valide";
    }
}

// Exemples d'utilisation 
echo calcule(10, '+', 5); // 15
