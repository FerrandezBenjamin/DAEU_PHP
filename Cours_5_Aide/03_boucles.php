<?php
// ===================================
// 03_BOUCLES.PHP - Les boucles en PHP
// ===================================

// Une boucle permet de répéter un bloc de code plusieurs fois.

// ------------------------------
// 1. Boucle while (tant que)
// ------------------------------

$compteur = 0;

while ($compteur < 5) {
    echo "Compteur (while) : $compteur<br>";
    $compteur++; // on incrémente pour éviter une boucle infinie
}

echo "<br>";

// ------------------------------
// 2. Boucle do...while (au moins une fois)
// ------------------------------

$nb = 0;

do {
    echo "Compteur (do...while) : $nb<br>";
    $nb++;
} while ($nb < 3);

echo "<br>";

// ------------------------------
// 3. Boucle for (la plus classique)
// ------------------------------

// Syntaxe : for (initialisation; condition; incrémentation)

for ($i = 1; $i <= 5; $i++) {
    echo "Boucle for : étape $i<br>";
}

echo "<br>";

// ------------------------------
// 4. foreach - pour les tableaux
// ------------------------------

$prenoms = ["Alice", "Bob", "Charlie"];

foreach ($prenoms as $prenom) {
    echo "Bonjour $prenom !<br>";
}

echo "<br>";

// Avec des clés (tableau associatif)
$notes = [
    "Maths" => 15,
    "Français" => 12,
    "Histoire" => 17
];

foreach ($notes as $matiere => $note) {
    echo "$matiere : $note / 20<br>";
}

echo "<br>";

// ------------------------------
// 5. break et continue
// ------------------------------

// break : interrompt totalement la boucle
// continue : saute à l'itération suivante

for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) {
        echo "On stoppe à 7.<br>";
        break;
    }

    if ($i % 2 == 0) {
        continue; // on saute les nombres pairs
    }

    echo "Nombre impair : $i<br>";
}

echo "<br>";

// ------------------------------
// EXERCICES
// ------------------------------
// 1. Utilise une boucle for pour afficher les nombres de 1 à 100
// 2. Utilise while pour afficher les multiples de 5 entre 0 et 50
// 3. Parcours un tableau d’aliments et affiche "J’aime les ..."
// 4. BONUS : dans un tableau associatif de produits avec prix, affiche seulement ceux au-dessus de 10€
//    et arrête la boucle s’il y a un produit nommé "stop"

// Tu peux aussi combiner boucles + conditions pour aller plus loin !


echo "<br><br>";
echo "<br><br>";

// ------------------------------
// 1. Afficher les nombres de 1 à 100 avec une boucle for
echo "1. Nombres de 1 à 100 :<br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}
echo "<br><br>";

// ------------------------------
// 2. Afficher les multiples de 5 entre 0 et 50 avec while
echo "2. Multiples de 5 entre 0 et 50 :<br>";
$j = 0;
while ($j <= 50) {
    if ($j % 5 === 0) {
        echo $j . " ";
    }
    $j++;
}
echo "<br><br>";

// ------------------------------
// 3. Parcourir un tableau d’aliments et afficher "J’aime les ..."
echo "3. Aliments préférés :<br>";
$aliments = ["pâtes", "chocolat", "sushi", "fromage"];
foreach ($aliments as $aliment) {
    echo "J’aime les $aliment<br>";
}
echo "<br>";

// ------------------------------
// 4. BONUS : Afficher les produits au-dessus de 10€ et arrêter si "stop"
echo "4. Produits à plus de 10€ (avec stop si produit 'stop') :<br>";
$produits = [
    "bananes" => 4,
    "chocolat" => 12,
    "stop" => 0,
    "vin" => 15,
    "pizza" => 8
];

foreach ($produits as $produit => $prix) {
    if ($produit === "stop") {
        echo "Produit 'stop' rencontré, on arrête la boucle.<br>";
        break;
    }

    if ($prix > 10) {
        echo "$produit coûte $prix €<br>";
    }
}

?>
