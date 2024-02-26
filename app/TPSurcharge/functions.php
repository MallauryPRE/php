<?php
require_once("Personne.php");


function foo(Personne $personne)
{
   
    echo "foo";
    $personne->saluer();
    $unAutre = new Personne(prenom:"Martin",nom:"DUPONT");
    $unAutre->saluer("Bonjour");

}
?>