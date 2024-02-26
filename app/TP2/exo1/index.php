<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$tableau[0] = 2023;
$tableau[1] = "DEVWEB-18-S2";
$tableau[] = 11.12;

$tab[0][0] = 12;
$tab[0][1] = "tv";
$tab[1][0] = 1245.678;
$tab[1][1] = "bye";

$toto["Nom"] = "le nom de famille de Toto...";
$toto["Age"] = 12;
$toto["Adresse"] = "22 rue des bois fleuri";

include 'script.php';

afficherTableau($tableau);

afficherTableau($tab);

afficherTableau($toto);

?>

</body>
</html>