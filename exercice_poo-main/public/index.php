<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Livre;
use App\Models\LivreSpecialise;


$livreDefault = new Livre("Le petit prince", "Antoine de Saint-Exupéry", 1943);


//Afficher des infos du livre par defaut
echo "Livre par default :";
echo "\n";
echo "Titre : " . $livreDefault->getTitre();
echo "\n";
echo "Auteur : " . $livreDefault->getAuteur();
echo "\n";
echo "Année de publication : " . $livreDefault->getAnneePublication();

// Modification des informations du livre
$livreDefault->setTitre('Test Titre');
$livreDefault->setAuteur('Test Auteur');
$livreDefault->setAnnePublication('Test Année de publication');

// Afficher les nouvelles informations du livre par defaut
echo "\n";
echo "\n";
echo "Livre par défaut après modifications : ";
echo "\n";
echo "Titre : " . $livreDefault->getTitre();
echo "\n";
echo "Auteur : " . $livreDefault->getAuteur();
echo "\n";
echo "Année de publication : " . $livreDefault->getAnneePublication();


//Création d'un nouvelle objet livre
$livreNouveau = new Livre("Les misèrables", "Victor Hugo", 1862);

// Afficher des infos du nouveau livre
echo "\n";
echo "\n";

echo "Nouveau livre : ";
echo "\n";
echo "Titre : " . $livreNouveau->getTitre();
echo "\n";
echo "Auteur : " . $livreNouveau->getAuteur();
echo "\n";
echo "Année de publication : " . $livreNouveau->getAnneePublication();


// Création d'un nouvel objet livre spécialisé
$livreSpecialise = new LivreSpecialise("Titre Livre Specialise", "Auteur Livre Specialise", 2022, 8);

// Afficher des infos du livre spécialisé
echo "\n";
echo "\n";
echo "Livre spécialisé : ";
echo "\n";
echo "Titre : " . $livreSpecialise->getTitre();
echo "\n";
echo "Auteur : " . $livreSpecialise->getAuteur();
echo "\n";
echo "Année de publication : " . $livreSpecialise->getAnneePublication();
echo "\n";
echo "Age recommandé : " . $livreSpecialise->getAgeRecommande(); 