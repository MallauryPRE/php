<?php
require_once 'fonctions.php';
require_once 'personne.php';
echo "<p>index.php:start</p>";
$prof = new Surcharge\Personne("Thierry","BRU",44);
echo $prof->saluer('Bonyour');
foo($prof);
foo($prof);
var_dump($prof);
$prof->methodeFoireuse(42,"tonton");
echo "<p>index.php:end</p>";
echo "voici l'age du prof".$prof->get_age();
echo "voici un autre get automatique:".$prof->get_nom()." et ".$prof->get_prenom();