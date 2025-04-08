<?php
// ===================================
// 01_VARIABLES.PHP - Comprendre les variables
// ===================================

// Une variable est un "conteneur" qui permet de stocker une information pour la réutiliser plus tard.
// En PHP, les variables commencent toujours par le symbole $ (dollar).

// --------------------------
// 1. Déclaration de variables
// --------------------------

$prenom = "Alice";      // une chaîne de caractères (string)
$age = 24;              // un entier (integer)
$taille = 1.70;         // un nombre à virgule (float)
$estEtudiant = true;    // un booléen (true ou false)

echo "Contenu des variables :<br>";
echo "Prénom : $prenom<br>";
echo "Âge : $age<br>";
echo "Taille : $taille m<br>";
echo "Est étudiante ? " . ($estEtudiant ? "Oui" : "Non") . "<br><br>";

// --------------------------
// 2. Réassignation
// --------------------------

$prenom = "Bob"; // On peut modifier la valeur d’une variable à tout moment

echo "Nouveau prénom : $prenom<br><br>";

// --------------------------
// 3. Concaténation de chaînes
// --------------------------

// Il existe deux façons d’insérer une variable dans une chaîne :
// - en utilisant les guillemets doubles (interpolation)
// - en utilisant le point (concaténation)

$ville = "Paris";

// Interpolation (plus lisible)
echo "Je vis à $ville<br>";

// Concaténation avec le point (utile quand on mélange beaucoup de types)
echo "Je vis à " . $ville . "<br><br>";

// --------------------------
// 4. Types de base avec var_dump
// --------------------------

echo "Types des variables :<br>";
var_dump($prenom); echo "<br>";
var_dump($age); echo "<br>";
var_dump($taille); echo "<br>";
var_dump($estEtudiant); echo "<br><br>";

// --------------------------
// 5. Bonnes pratiques (à encourager)
// --------------------------

// - Utiliser des noms de variables clairs et explicites
//   Exemple : $nombreDeMessages au lieu de $nb ou $x
// - Éviter d'utiliser des accents ou des espaces dans les noms
// - Toujours initialiser une variable avant de l'utiliser

$nombreDeMessages = 5;
$nomUtilisateur = "Claire";

echo "$nomUtilisateur a écrit $nombreDeMessages messages.<br><br>";

// --------------------------
// EXERCICE
// --------------------------
// 1. Crée une variable avec ton prénom
// 2. Une autre avec ton âge
// 3. Affiche une phrase du type "Je m'appelle ... et j'ai ... ans."
// 4. Utilise var_dump pour afficher les types
// 5. Réassigne ton âge et affiche à nouveau

?>
