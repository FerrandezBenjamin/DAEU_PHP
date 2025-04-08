<?php
// ===================================
// 02_CONDITIONS.PHP - Les conditions en PHP
// ===================================

// Une condition permet d'exécuter du code **seulement si** une certaine situation est vraie.

// ------------------------------
// 1. Condition simple avec if / else
// ------------------------------

$age = 20;

if ($age >= 18) {
    echo "Tu es majeur.<br>";
} else {
    echo "Tu es mineur.<br>";
}

// ------------------------------
// 2. Condition avec elseif (plusieurs cas)
// ------------------------------

$note = 15;

if ($note >= 16) {
    echo "Très bien !<br>";
} elseif ($note >= 10) {
    echo "C'est passable.<br>";
} else {
    echo "Tu dois progresser.<br>";
}

// ------------------------------
// 3. Les opérateurs de comparaison
// ------------------------------

// ==  égal en valeur
// === égal en valeur ET en type
// !=  différent
// <   inférieur
// <=  inférieur ou égal
// >   supérieur
// >=  supérieur ou égal

$a = 5;
$b = "5";

if ($a == $b) {
    echo "\$a est égal à \$b en valeur<br>";
}

if ($a === $b) {
    echo "\$a est strictement égal à \$b<br>";
} else {
    echo "\$a n'est PAS strictement égal à \$b (le type est différent)<br>";
}

// ------------------------------
// 4. Opérateurs logiques
// ------------------------------

// &&  ET logique (les deux conditions doivent être vraies)
// ||  OU logique (au moins une condition doit être vraie)
// !   NON logique (inverse une condition)

$motDePasse = "azerty";
$identifiant = "admin";

if ($identifiant === "admin" && $motDePasse === "azerty") {
    echo "Connexion réussie.<br>";
} else {
    echo "Identifiants incorrects.<br>";
}

// ------------------------------
// 5. Exemple plus réel : vérification d’accès
// ------------------------------

$estConnecte = true;
$estAdmin = false;

if ($estConnecte && $estAdmin) {
    echo "Bienvenue dans l'espace administrateur.<br>";
} elseif ($estConnecte && !$estAdmin) {
    echo "Bienvenue sur votre compte utilisateur.<br>";
} else {
    echo "Veuillez vous connecter pour accéder au site.<br>";
}

// ------------------------------
// EXERCICES
// ------------------------------
// 1. Crée une variable $temperature
//    - Si la température est < 0, affiche "Il gèle !"
//    - Entre 0 et 25, affiche "Il fait doux"
//    - Plus de 25, affiche "Il fait chaud !"

// 2. Crée une variable $motDePasse
//    - Si le mot de passe est "1234", affiche "Accès autorisé"
//    - Sinon, affiche "Mot de passe incorrect"

// 3. BONUS : joue avec les opérateurs logiques pour tester plusieurs conditions combinées

?>
