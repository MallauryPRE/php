<?php declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tpClassesStagiaires</title>
</head>
<body>
<?php

include_once('functions.php');
include_once('Personne.php');
$prof = new Personne(prenom:"Thierry", nom:"BRU");
$prof->saluer("Bonjour");
foo($prof);
var_dump($prof);
?>
</body>
</html>