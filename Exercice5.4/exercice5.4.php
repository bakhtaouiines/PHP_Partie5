<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5.4</title>
</head>
<body>
    <h1>Exercice 4 Partie 5 : Les Tableaux PHP</h1>
    <table>
        <?php
        $months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre')   ?>
        <tr>
        <?= $months[7] = 'Août'?>
        </tr>
    </table>
</body>
</html>