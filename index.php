<?php
class Triangle 
{
    public $longueur ;
    public $largeur ;
    public $hauteur ;

    public function __construct($longueur, $largeur, $hauteur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;

    }

    public function perimetre () {
        return $this->longueur + $this->largeur + $this->hauteur;
    }

    public function surface () {
        return $this->longueur * $this->largeur;
    }

    public function volume () {
        $this->surface() * $this->hauteur;
    }
}


$triangle = new Triangle(10, 10, 10);

echo $triangle->perimetre() . '<br>';