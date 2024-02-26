<?php

class Rectangle
{
    private float $_largeur;
    private float $_longueur;
    public function __construct(float $largeur, float $longueur)
    {
        $this->_largeur = $largeur;
        $this->_longueur = $longueur;
    }

    public function getLongueur(): float
    {
        return $this->_longueur;
    }

    public function getLargeur(): float
    {
        return $this->_largeur;
    }

    public function calculerPerimetre()
    {
        return 2 * ($this->_longueur + $this->_largeur);
    }

    public function calculerAire()
    {
        return ($this->_longueur * $this->_largeur);
    }

    public function estUnLosange()
    {
    if ($this->_longueur === $this->_largeur)
    {
        return 'VRAI';
    }
         else
    {
        return 'FAUX';
    }
    }

}
