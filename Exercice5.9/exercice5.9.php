<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5.9</title>
</head>
<body>
    <h1>Exercice 9 Partie 5 : Les Tableaux PHP</h1>
    <table>
        <?php
        $department = array (
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme');
            foreach($department as $key => $value){
        ?>
        <tr><td><?=$value;}?></td></tr>
    </table>
</body>
</html>