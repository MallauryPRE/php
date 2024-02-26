<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $individu1 = array(
        'Nom'=>'Dupond',
        'Prenom'=>'Martin',
        'Age'=>'18',
        'Nationalité'=>'Francais',
    );

    $individu2 = array(
        'Nom'=>'Duclos',
        'Prenom'=>'Martine',
        'Age'=>'19',
        'Nationalité'=>'Francaise',
    );

    $individu3 = array(
        'Nom'=>'Bontemps',
        'Prenom'=>'Dominique',
        'Age'=>'50',
        'Nationalité'=>'Francais',
    );

    $individus = array($individu1, $individu2, $individu3);
    foreach($individus as $key => $individus){
        echo "<pre>";
        var_dump($individus);
        echo "</pre>";
        
    }
?>
</body>
</html>