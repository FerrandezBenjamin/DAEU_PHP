<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="fond">
    <div class="global">
        <div class="nav">
            <div>
                <a href="index.php" class="btn">Accueil</a>
            </div>
            <div>
                <a href="etudiants/etudiants.php" class="btn">Voir les etudiants</a>
                <a href="#" class="btn">Voir les articles</a>
            </div>
        </div>
        <div class="container_principal">
            <div class="accueil center flex-column">
            
                
                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <p style="color: green;font-size:1.5rem">L'étudiant a bien été inscrit !</p>
                <?php endif; ?>

                <?php if (isset($_GET['deleted']) && $_GET['deleted'] == 1): ?>
                    <p style="color: orange;font-size:1.5rem">L'étudiant a été supprimé avec succès.</p>
                <?php endif; ?>

                <?php if (isset($_GET['modified']) && $_GET['modified'] == 1): ?>
                    <p style="color: red;font-size:1.5rem">La modification a bien été pris en compte !</p>
                <?php endif; ?>

                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                    <p style="color: red;font-size:1.5rem">Une erreur s'est produite. Aucun étudiant n'a été supprimé.</p>
                <?php endif; ?>


                <h1 class="bvn">Bienvenue</h1>
                
            </div>
        </div>
    </div>
</div>




</body>
</html>