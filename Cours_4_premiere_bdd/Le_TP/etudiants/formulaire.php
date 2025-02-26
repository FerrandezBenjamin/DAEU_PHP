<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire en PHP</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="fond">

<?php

include('../connexion/link.php'); // Inclusion de la connexion
include('../fonctions/fonction.php');

$sql = "SELECT * FROM groupes";
$allGroupes = $connect->query($sql)->fetchAll();

?>

    <div class="global">
        <div class="nav">
            <div>
                <a href="../index.php" class="btn">Accueil</a>
            </div>
            <div>
                <a href="etudiants.php" class="btn">Voir les étudiants déjà inscrits</a>
                <a href="#" class="btn">Voir les articles</a>
            </div>
        </div>
        <div class="container_principal">
            <h2>Inscription étudiant</h2>

            <form action="" method="POST" class="form-inscription">

                <!-- A faire le 26/02/2025 -->

                <input type="submit" value="Inscription !">
            </form>
        </div>
    </div>
</body>
</html>