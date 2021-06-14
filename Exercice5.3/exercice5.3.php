<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5.3</title>
</head>
<body>
    <h1>Exercice 3 Partie 5 : Les Tableaux PHP</h1>
    <table>
        <?php
        $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre')?>
        <tr><td><?= $months[5]?></td></tr>
    </table>
</body>
</html>