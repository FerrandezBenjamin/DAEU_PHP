<?php
// ===================================
// 05_FONCTIONS.PHP - Les fonctions en PHP
// ===================================

// Une fonction est un bloc de code qu’on peut exécuter plusieurs fois,
// avec ou sans paramètres, avec ou sans valeur retournée.

// ------------------------------
// 1. Définir et appeler une fonction simple
// ------------------------------

function direBonjour() {
    echo "Bonjour à tous !<br>";
}

// Appel de la fonction :
direBonjour();
direBonjour(); // on peut l’appeler autant de fois qu’on veut

echo "<br>";

// ------------------------------
// 2. Fonction avec un paramètre
// ------------------------------

function direBonjourA($prenom) {
    echo "Bonjour $prenom !<br>";
}

direBonjourA("Alice");
direBonjourA("Bob");

echo "<br>";

// ------------------------------
// 3. Fonction qui retourne une valeur (return)
// ------------------------------

function addition($a, $b) {
    return $a + $b; // return envoie le résultat à l’endroit où la fonction est appelée
}

$resultat = addition(4, 5);
echo "4 + 5 = $resultat<br>";

// On peut aussi directement afficher le résultat :
echo "7 + 3 = " . addition(7, 3) . "<br>";

echo "<br>";

// ------------------------------
// 4. Paramètres par défaut
// ------------------------------

function direBonjourAvecDefault($prenom = "inconnu") {
    echo "Bonjour $prenom !<br>";
}

direBonjourAvecDefault("Claire");
direBonjourAvecDefault(); // affichera "Bonjour inconnu !"

echo "<br>";

// ------------------------------
// 5. return VS echo
// ------------------------------

// echo affiche quelque chose
// return renvoie une valeur qu’on peut stocker, manipuler, tester...

function carre($x) {
    return $x * $x;
}

$valeur = carre(6); // on récupère la valeur
echo "Le carré de 6 est : $valeur<br>";

echo "<br>";

// ------------------------------
// 6. Bonnes pratiques
// ------------------------------

// - Utiliser des noms clairs (ex : calculTva, afficherMessage, etc.)
// - Utiliser le camelCase pour les noms (ex : direBonjourA)
// - Une fonction = une responsabilité
// - Préférer return quand on veut réutiliser la valeur

// ------------------------------
// EXERCICES
// ------------------------------
// 1. Crée une fonction qui s'appelle "bonjourNomAge" et affiche : "Bonjour [nom], tu as [âge] ans."
// 2. Crée une fonction qui prend un nombre et retourne s’il est pair ou impair
// 3. Crée une fonction qui retourne le prix TTC d’un article (prix + TVA)
// 4. BONUS : fais une fonction qui prend un tableau de notes et retourne la moyenne

?>
