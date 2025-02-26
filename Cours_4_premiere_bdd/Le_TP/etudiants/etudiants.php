<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="fond">

<?php
include('../connexion/link.php'); // Inclusion de la connexion
include('../fonctions/fonction.php');

// Vérification de la connexion
if (!$connect) {
    die("Erreur de connexion à la base de données.");
}

// Requête pour récupérer tous les étudiants V1

// Requête pour récupérer tous les étudiants et leur groupe V2
$sql = "SELECT * FROM `etudiants` INNER JOIN `groupes` ON etudiants.groupe_id = groupes.groupe_id ORDER BY `etudiant_id` ASC";
$allStudents = $connect->query($sql)->fetchAll();

// $allStudentsV2 = $connect->query($sql)->fetchAll(PDO::FETCH_OBJ);
// var_dump($allStudentsV2);

?>
<div class="global">
    <div class="nav">
        <div>
            <a href="../index.php" class="btn">Accueil</a>
        </div>
        <div>
            <a href="formulaire.php" class="btn">Inscrire un étudiant</a>
            <a href="#" class="btn">Voir les articles</a>
        </div>
    </div>
    <div class="container_principal">
        <div class="container">
            <div class="title">
                <h1>Liste des Étudiants</h1>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Groupe</th>
                            <th>Panier</th>
                            <th>Modifier l'étudiant</th>
                            <th>Supprimer l'étudiant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Vérifier s'il y a des étudiants
                        // Faire ici le code PHP pour récupérer et faire afficher tous les étudiants
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
