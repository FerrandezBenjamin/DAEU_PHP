<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètre GET en PHP</title>
    <link rel="stylesheet" href="style.css">
</head>


<?php

if (isset($_GET["etudiant"])) {
    $etudiantWas = htmlspecialchars($_GET['etudiant']);
    echo "Je suis l'étudiant : <b>" . $etudiantWas ."</b>.";
} else {
    echo "<p>Un paramètre GET est attendu.</p>";
}

?>
