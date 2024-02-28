<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once 'acteur.php';
require_once 'realisateur.php';
require_once 'film.php';

$realisateur = new Realisateur("Quentin", "Tarantino");
$acteur1 = new Acteur("John", "Travolta");
$acteur2 = new Acteur("Uma", "Thurman");

$film = new Film("Pulp Fiction", $realisateur);
$film->ajouterActeur($acteur1);
$film->ajouterActeur($acteur2);

$film->afficherFilm();

 ?>

</body>
</html>