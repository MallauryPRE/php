<?php
// var_dump($_POST) //pour débogage variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $civ = $_POST['civ'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $id = $_POST['id'];
    $mdp = $_POST['mdp'];
    $sexe =  $_POST['genre'];
    // $debut = ;

    echo "<h2>Réponses du formulaire :</h2>";
    echo "<p>Civilité : $civ</p>";
    echo "<p>Nom : $nom</p>";
    echo "<p>Prénom : $prenom</p>";
    echo "<p>Année de naissance : $age</p>";
    echo "<p>Identifiant : $id</p>";
    echo "<p>Mot de passe : $mdp</p>";
    echo "<p>Genre : $genre</p>";
    // echo "<p>Je débute en PHP : $debut</p>";
}
?>