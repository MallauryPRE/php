<?php

class Film {
    public $titre;
    public $realisateur; // Association avec un Realisateur
    public $acteurs = []; // Association avec plusieurs Acteurs

    public function __construct($titre, $realisateur) {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
    }

    public function ajouterActeur(Acteur $acteur) {
        $this->acteurs[] = $acteur;
    }

    public function afficherFilm() {
        echo "Film: " . $this->titre . "\n";
        echo "Realisateur: " . $this->realisateur->prenom . " " . $this->realisateur->nom . "\n";
        echo "Acteurs:\n";
        foreach ($this->acteurs as $acteur) {
            echo "- " . $acteur->prenom . " " . $acteur->nom . "\n";
        }
    }
}
?>