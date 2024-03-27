<?php

class Personnage {
    private $nom;
    private $prenom;
    private $classe;
    private $niveau;

    public function __construct($nom, $prenom, $classe, $niveau) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->classe = $classe;
        $this->niveau = $niveau;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }

    public function getClasse(): string {
        return $this->classe;
    }

    public function setClasse(string $classe): void {
        $this->classe = $classe;
    }

    public function getNiveau(): int {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): void {
        $this->niveau = $niveau;
    }
}
?>