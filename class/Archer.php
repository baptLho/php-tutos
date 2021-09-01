<?php

namespace Tutoriel;

class Archer extends Personnage
{


  public function __construct($nom)
  {
    $this->vie = $this->vie / 2;
    parent::__construct($nom);
  }

  public function attaque($cible)
  {
    $cible->vie -= $this->atk;
    parent::attaque($cible);
  }
}
