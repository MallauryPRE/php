<?php
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
class Personne
{
    public $prenom;
    public $nom;
    public $date;
    public $resume;

    public function __construct($prenom, $nom, $date, $resume) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->date = $date;
        $this->resume = $resume;
    }
    public static function create($jsonTest):Personne
    {
                
    }
}
