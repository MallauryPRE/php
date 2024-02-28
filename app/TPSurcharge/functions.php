<?php
function foo(Surcharge\Personne $pPersonne)
{
    echo "<p>foo:start</p>";
    echo $pPersonne->saluer();
    $unAutre = new Surcharge\Personne(prenom:"Martin",nom:"DUPONT");
    echo $unAutre->saluer('Bijour');
    $pPersonne->setName('BRUTUS');
    echo "<p>foo:end</p>";
}