<?php

namespace App\Models;

class LivreSpecialise extends Livre {
    private $ageRecommande;

    public function __construct($titre, $auteur, $anneePublication, $ageRecommande) {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->ageRecommande = $ageRecommande;
    }

    public function getAgeRecommande() {
        return $this->ageRecommande;
    }
}
