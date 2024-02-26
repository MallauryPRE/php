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

include_once('stagiaire.class.php');
include_once('rectangle.class.php');

$stagiaire1 = new Stagiaire();
$stagiaire1->nom = "DUPONT";
$stagiaire1->prenom = "Martin";

$stagiaire2 = new Stagiaire();
$stagiaire2->nom = "SMITH";
$stagiaire2->prenom = "John";

$stagiaires = [$stagiaire1, $stagiaire2];

echo "<pre>";
var_dump($stagiaires);
echo "Le nom du premier stagiaire est : " . $stagiaire1->nom;
echo "\nLe prénom du deuxième stagiaire est : " . $stagiaire2->prenom;
foreach ($stagiaires as $stagiaire) {
    echo $stagiaire->salutation(); 
}
echo "</pre>";
$rectangle = new Rectangle(4,5);
echo "<pre>";
echo "\nLe périmètre du rectangle est : " . $rectangle->calculerPerimetre();
echo "\nL'aire' du rectangle est : " . $rectangle->calculerAire();
echo "\nEst-ce un losange ? : " . $rectangle->estUnLosange();
echo "</pre>";
?>
</body>
</html>