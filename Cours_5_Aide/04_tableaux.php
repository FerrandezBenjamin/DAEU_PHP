<?php
// ===================================
// 04_TABLEAUX.PHP - Travailler avec les tableaux
// ===================================

// Un tableau permet de stocker plusieurs valeurs dans une seule variable.

// ------------------------------
// 1. Tableau indexé (liste simple)
// ------------------------------

$fruits = ["pomme", "banane", "kiwi"];

echo "Premier fruit : " . $fruits[0] . "<br>"; // les index commencent à 0
echo "Deuxième fruit : " . $fruits[1] . "<br>";

echo "Tous les fruits avec var_dump :<br>";
var_dump($fruits);
echo "<br><br>";

// Ajouter un élément à la fin
$fruits[] = "mangue";
var_dump($fruits);
echo "<br><br>";

// Boucle foreach pour afficher chaque fruit
foreach ($fruits as $fruit) {
    echo "J'aime le fruit : $fruit<br>";
}

echo "<br>";

// ------------------------------
// 2. Tableau associatif (clé => valeur)
// ------------------------------

$etudiant = [
    "prenom" => "Sophie",
    "age" => 22,
    "ville" => "Lyon"
];

echo "Nom : " . $etudiant["prenom"] . "<br>";
echo "Âge : " . $etudiant["age"] . "<br>";
echo "Ville : " . $etudiant["ville"] . "<br><br>";

// On peut ajouter une nouvelle clé
$etudiant["filiere"] = "Informatique";

foreach ($etudiant as $cle => $valeur) {
    echo "$cle : $valeur<br>";
}

echo "<br>";

// ------------------------------
// 3. Fonctions utiles sur les tableaux
// ------------------------------

// count() : compte le nombre d’éléments
echo "Nombre de fruits : " . count($fruits) . "<br>";

// array_keys() : retourne les clés
echo "Clés du tableau étudiant : ";
var_dump(array_keys($etudiant));
echo "<br>";

// in_array() : vérifier si une valeur est présente
if (in_array("banane", $fruits)) {
    echo "Il y a une banane dans la liste !<br>";
}

// isset() : vérifier si une clé existe
if (isset($etudiant["filiere"])) {
    echo "La filière est définie.<br>";
}

echo "<br>";

// ------------------------------
// 4. Tableaux multidimensionnels (bonus)
// ------------------------------

$classe = [
    ["nom" => "Alice", "note" => 16],
    ["nom" => "Bob", "note" => 12],
    ["nom" => "Charlie", "note" => 18]
];

foreach ($classe as $eleve) {
    echo $eleve["nom"] . " a eu " . $eleve["note"] . "/20<br>";
}

echo "<br>";

// ------------------------------
// EXERCICES
// ------------------------------
// 1. Crée un tableau avec tes 4 plats préférés et affiche-les un par un
// 2. Crée un tableau associatif avec les infos de ton profil (nom, âge, ville...)
// 3. Ajoute une clé "langage préféré" à ce tableau
// 4. Affiche toutes les clés et valeurs avec une boucle
// 5. BONUS : fais un tableau multidimensionnel de plusieurs livres avec titre, auteur, année

?>
