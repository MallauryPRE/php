<?php

class Stagiaire
{
    public string $prenom;
    public string $nom;
        public function salutation():String
        {
            return "\nJe m' appelle $this->prenom $this->nom";
        }
}

?>
