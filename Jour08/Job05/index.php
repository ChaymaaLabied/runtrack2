<?php
session_start();

// Initialisation du plateau si nécessaire
if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
    $_SESSION['message'] = '';
}

// Réinitialisation manuelle
if (isset($_POST['reset'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
    $_SESSION['message'] = '';
}

// Jouer un coup
if (isset($_POST['cell']) && $_SESSION['message'] === '') {
    $index = intval($_POST['cell']);
    if ($_SESSION['board'][$index] === '-') {
        $_SESSION['board'][$index] = $_SESSION['turn'];

        // Vérifier s'il y a un gagnant
        $winningCombos = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8], // lignes
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8], // colonnes
            [0, 4, 8],
            [2, 4, 6]  // diagonales
        ];

        foreach ($winningCombos as $combo) {
            [$a, $b, $c] = $combo; // les indices 
            if (
                $_SESSION['board'][$a] !== '-' &&
                $_SESSION['board'][$a] === $_SESSION['board'][$b] &&
                $_SESSION['board'][$a] === $_SESSION['board'][$c]
            ) {
                $_SESSION['message'] = $_SESSION['board'][$a] . ' a gagné !';
                break;
            }
        }

        // Vérifier match nul
        if ($_SESSION['message'] === '' && !in_array('-', $_SESSION['board'])) {
            $_SESSION['message'] = 'Match nul !';
        }

        // Changer de joueur
        if ($_SESSION['message'] === '') {
            $_SESSION['turn'] = $_SESSION['turn'] === 'X' ? 'O' : 'X';
        }
    }
}

// Réinitialiser après victoire ou match nul
if ($_SESSION['message'] !== '') {
    $message = $_SESSION['message'];
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
    $_SESSION['message'] = '';
} else {
    $message = ''; // on vide la variable message qu'on a créer 
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Jeu du morpion</title>
    <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        td {
            width: 60px;
            height: 60px;
            text-align: center;
        }

        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
            cursor: pointer;
        }

        .message {
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .reset-btn {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            font-size: 1em;
        }
    </style>
</head>

<body>

    <div class="message"><?= htmlspecialchars($message) ?></div>

    <form method="post">
        <table border="1">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++):
                        $index = $i * 3 + $j;
                    ?>
                        <td>
                            <?php if ($_SESSION['board'][$index] === '-'): ?>
                                <button type="submit" name="cell" value="<?= $index ?>">-</button>
                            <?php else: ?>
                                <span style="font-size: 24px;"><?= $_SESSION['board'][$index] ?></span>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit" name="reset" class="reset-btn">Réinitialiser la partie</button>
    </form>

</body>

</html>