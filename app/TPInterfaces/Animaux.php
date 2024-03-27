<?php
declare(strict_types=1);

abstract class Animal
{
    protected $nom;
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

}

interface Herbivore
{
    public function brouter();
}

interface Predateur
{
    public function chasser();
}

class Chat extends Animal implements Predateur
{
    public function chasser()
    {
        return "Le chat $this->nom chasse des souris";
    }
}

class Vache extends Animals implements Herbivore
{
    public function brouter()
    {
        return "La vache $this->nom broute de l'herbe";
    }
}

$herbivores = [];
$carnivores = [];

foreach ($animaux as $animal)
{

}