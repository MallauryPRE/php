<?php
declare(strict_types=1);
class Personne
{
    #region déclaration des attributs
    // private permet de pouvoir choisir si les valeurs peuvent etre modifiée d'en dehors une méthode de la classe Personne
    private int $_id;
    private string $_name;
    private string $_email;
    #endregion
    public function __construct(int $id,string $name, string $email)
    {
        // echo "__construct";
        $this->_id = $id;
        $this->_name = $name;
        $this->_email = $email;
    }
    public function decrire():string
    {
        // return 50; ne fonctionne pas car type strict et retour déclaré dans la signature: string
        return "$this->_name a comme email $this->_email";
    }
    #region getters : pour permettre la lecture en dépit des attributs en privé
    // l'attribut id est en lecture
    public function getId(): int
    {
        return $this->_id;
    }
    // l'attribut name est en lecture
    public function getName(): string
    {
        return $this->_name;
    }
// l'attribut email est en lecture
    public function getEmail(): string
    {
        return $this->_email;
    }
    #endregion
    #region setters
  // on ne met pas de setId(): l'identifiant est ainsi en lecture seule
  // l'attribut name est en écriture
  public function setName(string $pName):bool
  {
    try {
        $this->_name = $pName; // on suppose ici que cette opération pourrait échouer même si ici, mouais.
        return true;
    } catch (\Throwable $th) {
        return false; // dans le cas hypothétique ou une erupte d'une nova provoque un echec, false est renvoyé
    }
  }
  // l'attribut email est en écriture
  public function setEmail(string $pEmail):bool
  {
    try {
        $this->_email = $pEmail; // on suppose ici que cette opération pourrait échouer même si ici, mouais.
        return true;
    } catch (\Throwable $th) {
        return false; // dans le cas hypothétique ou une erupte d'une nova provoque un echec, false est renvoyé
    }
  }
  #endregion
  public static function chargerListePersonne(string $pJson):ArrayObject
  {
    $liste = new ArrayObject();
    $listeJson = json_decode($pJson);
    foreach ($listeJson as $key => $value) {
        $personne = new Personne($value->id,$value->name,$value->email);
        $liste->append($personne);
    }
    return $liste;
  }
  // réécriture de la methode __toString: elle est appelée par exemple quand on fait "echo" sur une instance de la classe personne
  public function __toString():string
  {
    return "[$this->_id] $this->_name ($this->_email)";

  }
  // réécriture de la methode __debugInfo: elle est appelée par exemple quand on fait var_dump sur une instance de la classe personne
  public function __debugInfo(){
    return array('identifiant'=>$this->_id,'nom et prenom'=>$this->_name,'courriel'=>$this->_email);
  }

}