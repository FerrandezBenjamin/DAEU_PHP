<?php
// =======================================
// FICHIER AIDE.PHP - INTRODUCTION AU PHP
// =======================================

// 1. AFFICHER DES INFORMATIONS
// -----------------------------

// echo sert à afficher du texte à l'écran.
// C'est ce qu'on utilise le plus souvent pour envoyer quelque chose à l'utilisateur.
echo "Bonjour, ceci est du texte affiché avec echo.<br>";

// print fonctionne aussi, mais il est un peu plus lent (techniquement, c'est une fonction qui retourne une valeur).
print "Ceci est affiché avec print.<br>";

// var_dump est utilisé pour voir le contenu DÉTAILLÉ d'une variable (type, valeur, structure).
// Très utile pour déboguer ou comprendre ce qu'on manipule.
$maVariable = "Hello";
var_dump($maVariable); // string(5) "Hello"
echo "<br>";

$nombre = 42;
var_dump($nombre); // int(42)
echo "<br>";


// 2. LES VARIABLES ET LES TYPES
// -----------------------------

// En PHP, une variable commence par le symbole $ (dollar).
$nom = "Alice";           // une chaîne de caractères
$age = 25;                // un nombre entier (integer)
$taille = 1.68;           // un nombre à virgule (float)
$estEtudiant = true;      // un booléen (vrai ou faux)

// Affichons ces variables avec echo
echo "Nom : $nom<br>";
echo "Âge : $age<br>";
echo "Taille : $taille m<br>";
echo "Est étudiant ? " . ($estEtudiant ? "Oui" : "Non") . "<br>";

// Petite astuce : pour voir les détails des variables, utilisez var_dump
var_dump($nom, $age, $taille, $estEtudiant);
echo "<br><br>";


// 3. LES OPERATIONS DE BASE
// -------------------------

$a = 10;
$b = 3;

echo "Addition : " . ($a + $b) . "<br>";
echo "Soustraction : " . ($a - $b) . "<br>";
echo "Multiplication : " . ($a * $b) . "<br>";
echo "Division : " . ($a / $b) . "<br>";
echo "Modulo (reste de la division) : " . ($a % $b) . "<br>";


// 4. CONDITIONS DE BASE
// ---------------------

// if permet d’exécuter du code selon une condition
if ($age >= 18) {
    echo "$nom est majeur.<br>";
} else {
    echo "$nom est mineur.<br>";
}

// Un autre exemple
$note = 14;
if ($note >= 10) {
    echo "L'étudiant a la moyenne.<br>";
} else {
    echo "L'étudiant n'a pas la moyenne.<br>";
}


// 5. TABLEAUX SIMPLES
// -------------------

// Un tableau (array) permet de stocker plusieurs valeurs dans une seule variable
$fruits = ["pomme", "banane", "cerise"];

echo "Premier fruit : " . $fruits[0] . "<br>";
echo "Tous les fruits : ";
var_dump($fruits);
echo "<br>";

// Ajouter un fruit
$fruits[] = "kiwi"; // on ajoute automatiquement à la fin
var_dump($fruits);
echo "<br>";


// 6. PETITE FONCTION SIMPLE
// -------------------------

// Une fonction est un bloc de code qu’on peut réutiliser
function direBonjour($prenom) {
    echo "Bonjour $prenom !<br>";
}

direBonjour("Alice");
direBonjour("Bob");

?>
