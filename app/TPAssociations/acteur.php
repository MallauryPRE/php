<?php

class Acteur {
    public $nom;
    public $prenom;
    
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}
?>