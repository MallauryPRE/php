<?php
class Personne
{

    private string $_prenom;
    private string $_nom;

    public function __construct(string $prenom, string $nom)
    
    {

        $this->prenom = $prenom;
        $this->nom = $nom;

    }
public function saluer():string
{
    return "azerty";
}
public function __debugInfo()
{
   
    return ['name'=>$this->_nom, 'first_name'=>$this->_prenom];

}
}
?>