<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5.10</title>
</head>
<body>
    <h1>Exercice 10 Partie 5 : Les Tableaux PHP</h1>  
        <?php
        $department = array(
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme');
            foreach($department as $departNumber => $departName){
        ?>
        <p>Le département <?=$departName;?> a le numéro <?=$departNumber;?></p>
        <?php
            }
            ?> 
</body>
</html>