<?php
/**
 * NE PAS TOUCHER LE FICHIER IL FONCTIONNE
 */
class ListePersonnes
{

    protected static $instance = null;
    public $liste;

    public static function getListePersonnes($pJsonFileName)
    {
        if (is_null(self::$instance)) {
            self::$instance = new ListePersonnes($pJsonFileName);
        }
        return self::$instance;
    }
    private function __construct($pJsonFileName)
    {
        $jsonData = file_get_contents($pJsonFileName);
        $object = json_decode($jsonData, true);
        $this->liste = new ArrayObject();
        foreach ($object as $key => $personne) {
            $this->liste->append(new Personne($personne["prenom"], $personne["nom"], new DateTime($personne["date"]), $personne["resume"]));
        }

    }
    public function findByName(string $name)
    {
        $resultat = new ArrayObject();
        foreach ($this->liste as $key => $personne) {
            if ($personne->nom == $name) {
                $resultat->append($personne);
            }
            return $resultat;
        }
    }
    public function findById(string $pId)
    {

            return $this->liste[$pId];
    
    }
}