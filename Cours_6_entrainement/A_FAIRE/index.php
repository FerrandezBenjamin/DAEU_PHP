<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train HTML - CSS - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
    <section>
        <div class="container">
            <div class="imagehere">
                <img src="img/abstract.jpg" alt="">
            </div>
            <form action="traitement.php" method="POST" class="form-basique">
                <div class="card">

                    <div class="container-title">
                       Demande d'inscription d'un étudiant
                    </div>

                    <div class="container-card">

                        <div class="input-container">
                            <label for="name">Nom :</label>
                            <input type="text" name="name" class="input-base" required>
                        </div>

                        <div class="input-container">
                            <label for="name">Prénom :</label>
                            <input type="text" name="surname" class="input-base" required>
                        </div>

                        <div class="input-container">
                            <label for="name">Adresse email :</label>
                            <input type="email" name="email" class="input-base" required>
                        </div>

                        <div class="input-container">
                            <label for="name">Numéro de téléphone :</label>
                            <input type="tel" name="number" class="input-base">
                        </div>

                        
                        <div class="input-container input-message">
                            <label for="name">Pourquoi voulez-vous rejoindre cette formation ? </label>
                            <textarea name="msg" id="" class="texta-base input-message"></textarea>
                        </div>

                        <div class="input-container flex-row gap">
                            <input type="checkbox" name="check">
                            <label for="check" class="droit">En cochant cette case vous acceptez les conditions générales d'utilisations</label>
                        </div>
                    </div>

                    <div class="container-footer">
                        <button type="submit">Je m'inscris !</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

    
</body>
</html>