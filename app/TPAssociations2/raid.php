<?php

class Raid {
    private $nom;
    private $lieu;
    private $date;
    private $participants;

    public function __construct($nom, $lieu, $date) {
        $this->nom = $nom;
        $this->lieu = $lieu;
        $this->date = $date;
        $this->participants = array();
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getLieu(): string {
        return $this->lieu;
    }

    public function setLieu(string $lieu): void {
        $this->lieu = $lieu;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function setDate(string $date): void {
        $this->date = $date;
    }

    public function participer(Personnage $personnage): void {
        $this->participants[] = $personnage;
    }

    public function getParticipants(): array {
        return $this->participants;
    }
}
?>